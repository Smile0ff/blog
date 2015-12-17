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
        $posts = $repository->findAllOrderedByDate();

        return $this->render('AppBundle:Blog:blog.html.twig', [
            "pageTitle" => $pageTitle,
            "posts" => $posts
        ]);
    }
    public function showAction($id){

        $blogRepo = $this->getDoctrine()->getRepository('AppBundle:Blog');
        $post = $blogRepo->findOneById($id);

        $commentRepo = $this->getDoctrine()->getRepository('AppBundle:Comment');
        $comments = $commentRepo->findAllCommentsByPost($post->getId());

        if(!$post)
            throw $this->createNotFoundException('Post not found');

        return $this->render('AppBundle:Blog:blog-item.html.twig', [
            "post" => $post,
            "comments" => $comments
        ]);
    }
}

?>