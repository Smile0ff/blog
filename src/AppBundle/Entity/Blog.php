<?php
// src/AppBundle/Entity/Blog.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog")
 */
class Blog
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $title;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $author;
    /**
    * @ORM\Column(type="text")
    */
    protected $description;
    /**
    * @ORM\Column(type="text")
    */
    protected $text;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $image;
    /**
    * @ORM\Column(type="text")
    */
    protected $tags;
    protected $comments;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;
}


?>