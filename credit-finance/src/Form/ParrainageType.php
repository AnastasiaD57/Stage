<?php

namespace App\Form;

use App\Entity\Parrainage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ParrainageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomParrain')
            ->add('MailParrain', EmailType::class)
            ->add('TelParrain')
            ->add('NomFilleul')
            ->add('MailFilleul', EmailType::class)
            ->add('TelFilleul')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Parrainage::class,
        ]);
    }
}
