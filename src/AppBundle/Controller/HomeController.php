<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        $pageTitle = "Home";

        return $this->render('AppBundle:Home:index.html.twig', [
            "pageTitle" => $pageTitle
        ]);
    }
}
