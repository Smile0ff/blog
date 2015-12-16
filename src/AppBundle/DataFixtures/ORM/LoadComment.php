<?php
// src/AppBundle/DataFixtures/ORM/LoadComment.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Blog;

class LoadComment extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager){

        $comment = new Comment();
        $comment->setUser('symfony');
        $comment->setText('To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.');
        $comment->setPost($manager->merge($this->getReference('post')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('David');
        $comment->setText('To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!');
        $comment->setPost($manager->merge($this->getReference('post1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setText('Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.');
        $comment->setPost($manager->merge($this->getReference('post2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setText('Are you challenging me? ');
        $comment->setPost($manager->merge($this->getReference('post3')));
        $comment->setCreated(new \DateTime("2011-07-23 06:15:20"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setText('Name your stakes.');
        $comment->setPost($manager->merge($this->getReference('post3')));
        $comment->setCreated(new \DateTime("2011-07-23 06:18:35"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setText('If I win, you become my slave.');
        $comment->setPost($manager->merge($this->getReference('post2')));
        $comment->setCreated(new \DateTime("2011-07-23 06:22:53"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setText('Your SLAVE?');
        $comment->setPost($manager->merge($this->getReference('post1')));
        $comment->setCreated(new \DateTime("2011-07-23 06:25:15"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setText('You wish! You\'ll do shitwork, scan, crack copyrights...');
        $comment->setPost($manager->merge($this->getReference('post')));
        $comment->setCreated(new \DateTime("2011-07-23 06:46:08"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setText('And if I win?');
        $comment->setPost($manager->merge($this->getReference('post3')));
        $comment->setCreated(new \DateTime("2011-07-23 10:22:46"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setText('Make it my first-born!');
        $comment->setPost($manager->merge($this->getReference('post1')));
        $comment->setCreated(new \DateTime("2011-07-23 11:08:08"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setText('Make it our first-date!');
        $comment->setPost($manager->merge($this->getReference('post')));
        $comment->setCreated(new \DateTime("2011-07-24 18:56:01"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setText('I don\'t DO dates. But I don\'t lose either, so you\'re on!');
        $comment->setPost($manager->merge($this->getReference('post3')));
        $comment->setCreated(new \DateTime("2011-07-25 22:28:42"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Stanley');
        $comment->setText('It\'s not gonna end like this.');
        $comment->setPost($manager->merge($this->getReference('post')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Gabriel');
        $comment->setText('Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.');
        $comment->setPost($manager->merge($this->getReference('post3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Mile');
        $comment->setText('Doesn\'t Bill Gates have something like that?');
        $comment->setPost($manager->merge($this->getReference('post2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Gary');
        $comment->setText('Bill Who?');
        $comment->setPost($manager->merge($this->getReference('post1')));
        $manager->persist($comment);

        $manager->flush();
    }
    public function getOrder(){
        return 2;
    }
}

?>