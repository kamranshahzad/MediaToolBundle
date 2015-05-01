<?php

namespace Kamran\TestBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Kamran\TestBundle\Form\DataTransformer\TagsTransformer;
 
class TagsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->appendClientTransformer(new TagsTransformer());
    }
 
    public function getParent(array $options)
    {
        return 'text';
    }
 
    public function getName()
    {
        return 'tags';
    }
}