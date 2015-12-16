<?php
// src/AppBundle/Form/FeedbackType.php
namespace AppBundle\Form;
    
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder
                ->add('name', TextType::class)
                ->add('email', EmailType::class)
                ->add('message', TextAreaType::class);
    }
    public function configureOptions(OptionsResolver $resolver){

        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Feedback',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'intention' => 'feedback_form'
        ]);
    }
}

?>