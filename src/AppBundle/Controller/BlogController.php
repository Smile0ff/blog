<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class BlogController extends Controller
{
    public function indexAction(){
        $pageTitle = "Blog";

        $repository = $this->getDoctrine()->getRepository('AppBundle:Blog');
        $posts = $repository->findAllOrderedById();

        return $this->render('AppBundle:Blog:blog.html.twig', [
            "pageTitle" => $pageTitle,
            "posts" => $posts
        ]);
    }
    public function showAction($id){

        $repository = $this->getDoctrine()->getRepository('AppBundle:Blog');
        $post = $repository->find($id);

        $comments = $this->getDoctrine()->getRepository('AppBundle:Comment')->getCommentsForPost($post->getId());

        if(!$post)
            throw $this->createNotFoundException('No post found for id '.$id);

        return $this->render('AppBundle:Blog:blog-item.html.twig', [
            "post" => $post,
            "comments" => $comments
        ]);
    }
}

?>