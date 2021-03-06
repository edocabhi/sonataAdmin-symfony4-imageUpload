<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;


final class PropertyAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('Title')
            ->add('imageFile')
        ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
            ->add('Title')
            ->add('imageFile', '<img src="https://via.placeholder.com/150" class="admin-preview" /><br>')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        if (($this->getSubject()) && ($image = $this->getSubject()->getImageFile())) {
            $imagePath = '/image/'.$image;
        }else{
            $imagePath =  'https://via.placeholder.com/150';
        }
        $formMapper
//            ->add('id')
            ->add('Title')
            ->add('file', FileType::class, [
                'label' => 'Image',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,
                'required' => false,
                'help' => '<img src="'.$imagePath.'" class="admin-preview" /><br>',
                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5m',
                        'mimeTypes' => [
                            'image/jpg',
                            'image/jpeg',
                            'image/png'
                        ],
                        'mimeTypesMessage' => 'Please upload jpg/jpeg/png images only.',
                    ])
                ],
            ])
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('Title')
            ->add('imageFile')
        ;
    }
}
