<?php

namespace App\Form;

use App\Entity\Plat;
use App\Entity\Restaurant;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class PlatRestaurantType extends AbstractType
{

    //private $user;

    /* public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->user = $tokenStorage->getToken()->getUser();
    }*/

    public function buildForm(FormBuilderInterface $builder, array $options)

    {



        $builder
            ->add('libele')
            ->add('description')
            ->add('prix')
            ->add('restaurant', EntityType::class, [
                'class' => Restaurant::class,
                'query_builder' => function (RestaurantRepository $er) use ($options) {
                    return $er->createQueryBuilder('r')
                        ->andWhere('r.user = :val')
                        ->setParameter('val', $options['user'])
                        ->orderBy('r.name', 'ASC');
                },

            ]);
    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plat::class,
            'user' => null
        ]);
    }
}
