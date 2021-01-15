<?php

namespace App\Form;

use App\Entity\Vehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label'  => 'Marque du modèle',
                'attr'   =>  array(
                    'class'   => 'input-form')
                ))
            ->add('buyprice', IntegerType::class, array(
                'label'  => 'Prix d\'achat'))
            ->add('sellprice', IntegerType::class, array(
                'label'  => 'Prix de revente estimé'))
            ->add('lifetime', IntegerType::class, array(
                'label'  => 'Temps estimé en année'))
            ->add('timeworkingbyyear', IntegerType::class, array(
                'label'  => 'Travail H/année'))
            ->add('picture', FileType::class, [
                'label' => 'Picture (jpg, jpeg, png, webp)',
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2m',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Seuls les fichiers jpg, jpeg, png et webp sont acceptés',
                    ])
                ],
            ]);
            $builder->get('picture')->addModelTransformer(new CallBackTransformer(
                function ($picture) {
                    return null;
                },
                function ($picture) {
                    return $picture;
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicle::class,
        ]);
    }
}
