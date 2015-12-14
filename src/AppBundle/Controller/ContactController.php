<?php
// src/AppBundle/Controller/ContactController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Feedback;
use AppBundle\Form\FeedbackType;

class ContactController extends Controller
{
    public function indexAction(Request $request)
    {
        $pageTitle = "Contact";

        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);

        $form->handleRequest($request);

        if($form->isValid()){

        }
        else{
           
        }

        return $this->render('AppBundle:Contact:contact.html.twig', [
            'pageTitle' => $pageTitle,
            'feedback' => $form->createView()
        ]);
    }
}
