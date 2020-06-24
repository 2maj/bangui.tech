<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * @Route("/contacter-bangui-tech", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
    $message = (new \Swift_Message('Hello Email'))
        ->setFrom('contact@bangui.tech')
        ->setTo('adjimahamat@gmail.com')
        ->setBody(
            "Bonjour"
        );

    $send = $mailer->send($message);

    return $this->redirectToRoute("home");
  }

  /**
  *@Route("/abonner-bangui-tech", name="subscrib")
  */
  public function subscrib(Request $request,  \Swift_Mailer $mailer){
    $form = $request->request->all();
    if($form){
      $email =  $form['subsrib']['email'];
      $message = (new \Swift_Message('Newsletter'))
          ->setFrom('contact@bangui.tech')
          ->setTo($email)
          ->setBody(
              "Bonjour, vous venez de vous abonner à notre newsletter."
          );

      $send = $mailer->send($message);
    }

    return $this->redirectToRoute('home');
  }
}
