<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class BlogController extends Controller
{
    public function indexAction(){
        $pageTitle = "Blog";

        return $this->render('AppBundle:Blog:blog.html.twig', [
            "pageTitle" => $pageTitle
        ]);
    }
}

?>