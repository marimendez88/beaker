<?php

namespace Lumen\AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AsistentesAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('apellido')
            ->add('telefono')
            ->add('email')
            ->add('clave')
            ->add('tipoAsistente', null, array('label' => 'Tipo de Beca' ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('apellido')
            ->add('telefono')
            ->add('email')
            ->add('tipoAsistente', null, array('label' => 'Tipo de Beca' ))
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('apellido')
            ->add('telefono')
            ->add('email')
            ->add('tipoAsistente', null, array('label' => 'Tipo de Beca', 'by_reference' => false ))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('apellido')
            ->add('telefono')
            ->add('email')
            ->add('tipoAsistente', null, array('label' => 'Tipo de Beca' ))

        ;
    }
}
