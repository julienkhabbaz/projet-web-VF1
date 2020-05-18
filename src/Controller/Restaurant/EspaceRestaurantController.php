<?php

namespace App\Controller\Restaurant;

use App\Entity\Plat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Restaurant;
use App\Form\PlatRestaurantType;
use App\Form\RestaurantType;
use App\Repository\PlatRepository;
use App\Repository\RestaurantRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/espace_restaurant")
 */
class EspaceRestaurantController extends AbstractController
{
    /**
     * @Route("/dash", name="espace_restaurant")
     */
    public function index()
    {
        return $this->render('espace_restaurant/index.html.twig', [
            'controller_name' => 'EspaceRestaurantController',
        ]);
    }

    /**
     * @Route("/restaurants", name="mes_restaurants", methods={"GET"})
     */
    public function listeRestaurants(RestaurantRepository $restaurantRepository, UserInterface $user): Response
    {

        return $this->render('espace_restaurant/restaurant/restaurants.html.twig', [
            'restaurants' => $restaurantRepository->findByExampleField($user),
        ]);
    }
    /**
     * @Route("/plats", name="mes_plats_restaurants", methods={"GET"})
     */

    public function listePlats(UserInterface $user, PlatRepository $platRepository): Response
    {

        return $this->render('espace_restaurant/plats/plats.html.twig', [
            'plats' => $platRepository->findPlatsByUser($user),
        ]);
    }

    /**
     * @Route("/restaurant_new", name="restaurants_new", methods={"GET","POST"})
     */
    public function newRestaurant(Request $request, UserInterface $user): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $restaurant->setUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($restaurant);
            $entityManager->flush();

            return $this->redirectToRoute('mes_restaurants');
        }

        return $this->render('espace_restaurant/restaurant/new.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/plat_new", name="plats_new", methods={"GET","POST"})
     */
    public function newPLat(Request $request, UserProviderInterface $user): Response
    {
        //$userId = $this->get('security.context')->getToken()->getUser()->getId();
        $user = $this->getUser()->getId();

        $plat = new Plat();
        $form = $this->createForm(
            PlatRestaurantType::class,
            $plat,
            ['user' => $user]

        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($plat);
            $entityManager->flush();

            return $this->redirectToRoute('mes_plats_restaurants');
        }

        return $this->render('espace_restaurant/plats/new_plat.html.twig', [
            'plat' => $plat,
            'form' => $form->createView(),

        ]);
    }
}
