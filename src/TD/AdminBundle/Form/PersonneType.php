<?php
/**
 * Created by PhpStorm.
 * User: Wesley
 * Date: 17/12/2016
 * Time: 04:46
 */


namespace Devschool\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GenreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('date_de_naissance')
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
        ;
    }
}