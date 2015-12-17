<?php
// src/Blogger/BlogBundle/Entity/Repository/Blog.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Blog extends EntityRepository
{

    public function findAllOrderedByDate(){

        try {
            
            $em = $this->getEntityManager();
            $dbh = $em->getConnection();

            $stmt = $dbh->query('SELECT * FROM blog ORDER BY created ASC');

            return $stmt->fetchAll();
               
        } catch (Exception $e) {
            throw new Exception("Error Processing Request", 1);
            
        }

    }

}
