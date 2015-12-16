<?php
// src/Blogger/BlogBundle/Entity/Repository/Comment.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Comment extends EntityRepository
{
    public function getCommentsForPost($postId, $approved = true){

        $qb = $this->createQueryBuilder('c')
           ->select('c')
           ->where('c.post = :post_id')
           ->addOrderBy('c.created')
           ->setParameter('post_id', $postId);

        if (false === is_null($approved))
            $qb->andWhere('c.approved = :approved')
               ->setParameter('approved', $approved);

        return $qb->getQuery()
                  ->getResult();

    }
}
