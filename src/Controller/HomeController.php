<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SubsribType;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $form = $this->createForm(SubsribType::class,[
            'action' => $this->generateUrl('subscrib'),
            'method' => 'POST',
        ]);
        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/presentation-bangui", name="presentation")
     */
     public function presentation(){
       return $this->redirectToRoute('home');
     }

     /**
      * @Route("/forum-bangui-tech", name="forum")
      */
      public function forum(){
        return $this->redirectToRoute('home');
      }

      /**
       * @Route("/Nos-produits-bangui-tech", name="our-products")
       */
       public function ourProducts(){
         return $this->redirectToRoute('home');
       }

      /**
       * @Route("/nos-activite-bangui", name="activities")
       */
       public function activities(){
         return $this->redirectToRoute('home');
       }

}
