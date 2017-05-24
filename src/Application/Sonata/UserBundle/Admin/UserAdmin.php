<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Sonata\UserBundle\Admin;

//use Sonata\AdminBundle\Admin\Admin;

use Sonata\UserBundle\Admin\Model\UserAdmin as SonataUserAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Application\Sonata\UserBundle\Entity\UserRepository;
use Application\Sonata\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

/**
 * Description of UserAdmin
 *
 * @author leonardo
 */
class UserAdmin extends SonataUserAdmin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        $user =  new User();
        parent::configureFormFields($formMapper);
        $formMapper
            ->tab('Profile')
            ->add('image', 'comur_image', array(
                'label' => 'Profile image',
                'uploadConfig' => array(
                    'uploadRoute' => 'comur_api_upload',        //optional
                    'uploadUrl' => $user->getUploadRootDir(),       // required - see explanation below (you can also put just a dir path)
                    'webDir' => $user->getUploadDir(),              // required - see explanation below (you can also put just a dir path)
                    'fileExt' => '*.jpg;*.gif;*.png;*.jpeg',    //optional
                    'libraryDir' => null,                       //optional
                    'libraryRoute' => 'comur_api_image_library', //optional
                    'showLibrary' => true,                      //optional
                    'saveOriginal' => 'originalImage',          //optional
                    'generateFilename' => true          //optional
                ),
                'cropConfig' => array(
                    'minWidth' => 90,
                    'minHeight' => 90,
                    'aspectRatio' => true,              //optional
                    'cropRoute' => 'comur_api_crop',    //optional
                    'forceResize' => false,             //optional
                    'thumbs' => array(                  //optional
                                                        array(
                                                            'maxWidth' => 180,
                                                            'maxHeight' => 400,
                                                            'useAsFieldImage' => true  //optional
                                                        )
                    )
                )
            ))        ;
    }

    protected function configureListFields(\Sonata\AdminBundle\Datagrid\ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
    }

    public function prePersist($object)
    {
        if($object->getImage())
        {
            $object->setRealPathImage("/uploads/profile/".$object->getImage());
        }
    }

    public function preUpdate($object)
    {
        if($object->getImage())
        {
            $object->setRealPathImage("/uploads/profile/".$object->getImage());
        }
    }

}
