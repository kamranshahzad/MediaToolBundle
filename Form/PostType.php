<?php

namespace Kamran\TestBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Event\DataEvent;
 
use Kamran\TestBundle\Form\TagsType;
 
 
class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name');
        $builder->add('description');
        $builder->add('tags', new TagsType()); // add tags field
    }
 
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Kamran\TestBundle\Entity\Post',
        );
    }
 
    public function getName()
    {
        return 'post_form';
    }
}