<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Job;
class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('email', TextType::class)
            ->add('telefono', TextType::class, array('label' => 'Teléfono'))
            ->add('job', EntityType::class, array(
                'class' => Job::class,
                'choice_label' => 'nombre'))
            ->add('save', SubmitType::class, array('label' => 'Guardar cambios'))
            ->getForm();
    }
}