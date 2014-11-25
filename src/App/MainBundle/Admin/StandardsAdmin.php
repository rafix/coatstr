<?php

namespace App\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class StandardsAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('itemNo')
            ->add('standardNo')
            ->add('organization')
            ->add('link')
            ->add('industries')
            ->add('locations')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('organization')
            ->add('link')
            ->add('abstract')

            ->add('_action', 'actions', array(
                'actions' => array(
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
            ->add('title')
            ->add('organization')
            ->add('itemNo')
            ->add('standardNo')
            ->add('keywords')
            ->add('abstract')
            ->add('link', 'url')
            ->add('assets')
            ->add('industries')
            ->add('environments')
            ->add('locations')
            ->add('processes')
            ->add('types')
            ->add('substrates')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('organization')
            ->add('itemNo')
            ->add('standardNo')
            ->add('title')
            ->add('keywords')
            ->add('abstract')
            ->add('link')
        ;
    }
}
