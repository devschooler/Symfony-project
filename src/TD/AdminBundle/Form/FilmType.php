<?php
/**
 * Created by PhpStorm.
 * User: Wesley
 * Date: 17/12/2016
 * Time: 04:46
 */


namespace TD\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('Synopsis')

            ->add('date_de_sortie' , DateType::class, array('years' => range('1000','2017')))

            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
        ;
    }
}