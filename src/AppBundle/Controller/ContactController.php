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

            $email = \Swift_Message::newInstance()
                ->setSubject('Feedback from blog')
                ->setFrom('feedback@blog.com')
                ->setTo('a.parneta@gmail.com')
                ->setBody($this->renderView('AppBundle:Email:feedback-email.html.twig', array('feedback' => $feedback)), 'text/html');

            $this->get('mailer')->send($email);
            $this->addFlash('feedback-notice', 'Feedback was successfully sent');

            return $this->redirect($this->generateUrl('contact'));
        }
        else{
           
        }

        return $this->render('AppBundle:Contact:contact.html.twig', [
            'pageTitle' => $pageTitle,
            'feedback' => $form->createView()
        ]);
    }
}
