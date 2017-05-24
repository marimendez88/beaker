<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
    public function getSellersDirectory()
    {
        $dql = 'SELECT U '
                . 'FROM ApplicationSonataUserBundle:User U '
                . 'WHERE U.type_user = :type_user '
            ;
        
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameters(array(
                                    ':type_user' => 'Seller'
        ));
        $query->setMaxResults(10);
        
        return $query->getResult();
    }
    
    public function getSeller($id)
    {
        $query = $this->createQueryBuilder('S')
                ->where('S.id = :id')
                ->andWhere('S.type_user = :type_user')
                ->setMaxResults(1)
                ;
        
        $query->setParameters(array(
                                    ':id'        =>  $id,
                                    ':type_user' => 'Seller'
                ));
        
        $results = $query->getQuery()->getResult();
        
        return count($results) > 0 ? $results[0] : null;
    }
    
    /*public function getSeller($id)
    {
        $dql = 'SELECT S, RD '
                . 'FROM ApplicationSonataUserBundle:User S '
                . 'LEFT JOIN S.pending_requests RD WITH RD.type = :type '
                . 'WHERE S.id = :id '
                ;
        
        $query = $this->getEntityManager()->createQuery($dql);
        
        $query->setParameters(array(
                                    ':id'   => $id,
                                    ':type' => 'date'
                ));
        $query->setMaxResults(1);
        
        $results = $query->getResult();
        
        return count($results) > 0 ? $results[0] : null;
    }*/
    
    public function search($filter, $keyword, $user = null, $limit = 10)
    {
        $query     = $this->searchQuery($filter, $keyword, $user, $limit);
        $paginator = new \Doctrine\ORM\Tools\Pagination\Paginator($query, $fetchJoinCollection = true);
        
        return $paginator;
    }
    
    public function searchQuery($filter, $keyword = null, $user = null, $limit = 10)
    {
        $query = $this->createQueryBuilder('U')
                ->where('U.type_user = :type_user')
                ->setFirstResult(0)
                ->setMaxResults($limit)
                ->setParameter(':type_user', 'Seller');
        
        if (!is_null($keyword) && $filter !== 'recommended')
        {
            $query->andWhere(
                    $query->expr()->orX(
                            $query->expr()->like('U.company_name', $query->expr()->literal("%$keyword%")),
                            $query->expr()->like('U.country'     , $query->expr()->literal("%$keyword%")),
                            $query->expr()->like('U.position'    , $query->expr()->literal("%$keyword%")),
                            $query->expr()->like('U.firstname'   , $query->expr()->literal("%$keyword%")),
                            $query->expr()->like('U.lastname'    , $query->expr()->literal("%$keyword%"))
                    )
            );
        }
        
        if($filter === 'enterprises')
        {
            $query->orderBy('U.company_name');
        }
        
        /**
         * Implementación del Filtro de los recomendados que es por medio de la
         * relacion entre los usuarios y los tags eso deberia ser un query y metodos
         * aparte ya que se requiere el usuario autenticado en el sistema.
         */
        if(!is_null($user) && $filter === 'recommended')
        {
            $query  ->innerJoin('U.tags', 'T')
                    ->innerJoin('T.users', 'TU')
                    ->andWhere('TU.id = :user_id')
                    ->setParameter(':user_id', $user->getId());
        }
        
        return $query;
    }
    
    /**
     * @todo Pendiente Implementacion.
     * @param type $mailer
     * @param \Application\Sonata\UserBundle\Entity\User $user
     */
    public function sendRegistrationNotificationForUser($container, User $user, $password)
    {
        $translator = $container->get('translator');
        $message = \Swift_Message::newInstance()
                ->setSubject($translator->trans('emails.notification.login.subject', array(), null, $user->getLocale()))
                ->setFrom(array('no-reply@centroamericatm.com'))
                ->setTo(array($user->getEmail()))
                ->setBcc(array('jordan.loaiza@lumenup.com', 'leonardo.monge@lumenup.com'))
                ->setBody($container->get('twig')->render('LumenDateBundle:Email:notificationLogin.html.twig', array('user' => $user, 'password' => $password)), 'text/html');
        
        try {
            $container->get('mailer')->send($message);   
        } catch (\Exception $exc) {
//            throw $exc;
        }
    }
}
