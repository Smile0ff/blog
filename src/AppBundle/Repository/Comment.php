<?php
// src/Blogger/BlogBundle/Entity/Repository/Comment.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Comment extends EntityRepository
{
    public function findAllCommentsByPost($postId, $approved = true){

        try {
            
            $em = $this->getEntityManager();
            $dbh = $em->getConnection();

            $stmt = $dbh->prepare('SELECT * FROM comment WHERE post_id = :post_id AND approved = :approved ORDER BY id ASC');
            $stmt->execute(['post_id' => $postId, 'approved' => $approved]);

            return $stmt->fetchAll();

        } catch(Exception $e){
                throw new Exception("Error Processing Request");
        }

    }
}