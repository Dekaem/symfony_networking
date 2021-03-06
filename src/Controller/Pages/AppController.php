<?php

namespace App\Controller\Pages;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppController extends AbstractController
{
    private $entityManager;

    public function __construct(
        EntityManagerInterface $entityManager

    ) {
        $this->entityManager = $entityManager;
    }
    
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('app/index.html.twig');
    }
    
    /**
     * @Route("/elements", name="elements", methods={"GET"})
     */
    public function elements(): Response
    {
        return $this->render('app/elements.html.twig');
    }
}
