<?php

namespace App\Controller\Client;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EspaceCLientController extends AbstractController
{
    /**
     * @Route("/espace_client", name="espace_client")
     */
    public function index()
    {
        return $this->render('espace_client/index.html.twig', [
            'controller_name' => 'EspaceCLientController',
        ]);
    }
}
