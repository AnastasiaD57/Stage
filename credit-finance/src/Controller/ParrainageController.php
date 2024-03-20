<?php

namespace App\Controller;

use App\Entity\Parrainage;
use App\Form\ParrainageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ParrainageController extends AbstractController
{
    #[Route('/parrainage', name: 'parrainage')]
    public function new_parrainage(Request $request, EntityManagerInterface $em): Response
    {
        $parrainage = new Parrainage();
        $form = $this->createForm(ParrainageType::class, $parrainage);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($parrainage);
            $em->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('parrainage/index.html.twig', [ "form" => $form ]);
    }
}
