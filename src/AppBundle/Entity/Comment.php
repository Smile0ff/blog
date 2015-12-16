<?php
// src/AppBundle/Entity/Comment.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Comment")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{   
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    /**
    * @ORM\Column(type="string")
    */
    protected $user;
    /**
    * @ORM\ManyToOne(targetEntity="Blog", inversedBy="comments")
    * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
    */
    protected $post;
    /**
    * @ORM\Column(type="text")
    */
    protected $text;
    /**
    * @ORM\Column(type="boolean")
    */
    protected $approved;
    /**
    * @ORM\Column(type="datetime")
    */
    protected $created;

    /**
    * @ORM\Column(type="datetime")
    */
    protected $updated;

    public function __construct(){
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
        $this->setApproved(true);
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Comment
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     *
     * @return Comment
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Comment
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Comment
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set comment
     *
     * @param \AppBundle\Entity\Blog $comment
     *
     * @return Comment
     */
    public function setComment(\AppBundle\Entity\Blog $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \AppBundle\Entity\Blog
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set post
     *
     * @param \AppBundle\Entity\Blog $post
     *
     * @return Comment
     */
    public function setPost(\AppBundle\Entity\Blog $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Blog
     */
    public function getPost()
    {
        return $this->post;
    }
}
