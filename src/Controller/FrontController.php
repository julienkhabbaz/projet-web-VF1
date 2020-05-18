<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Restaurant;
use App\Form\CommandeType;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(RestaurantRepository $repository)
    {

        $restaurants = $repository->findLatest();
        return $this->render('front/index.html.twig', [
            'restaurants' => $restaurants
        ]);
    }

    /**
     * @Route("/restaurants", name="liste_restaurants")
     */
    public function ListRestaurant(RestaurantRepository $repository)
    {
        $restaurants = $repository->findAll();
        return $this->render('front/restaurants.html.twig', [
            'restaurants' => $restaurants
        ]);
    }
    /**
     * @Route("restaurant/{id}", name="detail_restaurant", methods={"GET"})
     */
    public function show(Restaurant $restaurant): Response
    {
        return $this->render('front/show.html.twig', [
            'restaurant' => $restaurant,
        ]);
    }


    /**
     * @Route("/commande/{id}", name="commander", methods={"GET","POST"})
     */
    public function Commander(UserProviderInterface $user): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /* $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('commande_index');
        }

        return $this->render('front/commande.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);*/
        return $this->render('front/commande.html.twig');
    }
}
