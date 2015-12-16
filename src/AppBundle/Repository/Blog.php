<?php
// src/Blogger/BlogBundle/Entity/Repository/Blog.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Blog extends EntityRepository
{
    public function findAllOrderedById(){

        return $this->getEntityManager()
            ->createQuery('SELECT b FROM AppBundle:blog b ORDER BY b.id ASC')
            ->getResult();

    }
}
