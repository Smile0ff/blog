<?php
// src/AppBundle/DataFixtures/ORM/LoadBlogPost.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager){

        $post = new Blog();
        $post->setTitle("Hello world");
        $post->setAuthor("Smile0ff");
        $post->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem.");
        $post->setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem. Donec magna nulla, bibendum vel diam ac, egestas feugiat massa. Integer lectus velit, pulvinar quis ligula nec, pellentesque pretium tortor. Cras id venenatis erat, vitae pharetra urna");
        $post->setImage("desert.jpg");
        $post->setTags("hello, world");
        
        $post1 = new Blog();
        $post1->setTitle("Hello world 1");
        $post1->setAuthor("Smile0ff");
        $post1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem.");
        $post1->setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem. Donec magna nulla, bibendum vel diam ac, egestas feugiat massa. Integer lectus velit, pulvinar quis ligula nec, pellentesque pretium tortor. Cras id venenatis erat, vitae pharetra urna");
        $post1->setImage("desert.jpg");
        $post1->setTags("hello, world");
        
        $post2 = new Blog();
        $post2->setTitle("Hello world 2");
        $post2->setAuthor("unnamed");
        $post2->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem.");
        $post2->setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem. Donec magna nulla, bibendum vel diam ac, egestas feugiat massa. Integer lectus velit, pulvinar quis ligula nec, pellentesque pretium tortor. Cras id venenatis erat, vitae pharetra urna");
        $post2->setImage("desert.jpg");
        $post2->setTags("hello, world");

        $post3 = new Blog();
        $post3->setTitle("Hello world 3");
        $post3->setAuthor("unnamed");
        $post3->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem.");
        $post3->setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla, neque ut ornare dignissim, augue velit eleifend elit, nec laoreet est massa in lorem. Donec magna nulla, bibendum vel diam ac, egestas feugiat massa. Integer lectus velit, pulvinar quis ligula nec, pellentesque pretium tortor. Cras id venenatis erat, vitae pharetra urna");
        $post3->setImage("desert.jpg");
        $post3->setTags("hello, world");

        $manager->persist($post);
        $manager->persist($post1);
        $manager->persist($post2);
        $manager->persist($post3);

        $this->addReference('post', $post);
        $this->addReference('post1', $post1);
        $this->addReference('post2', $post2);
        $this->addReference('post3', $post3);

        $manager->flush();
    }
    public function getOrder(){
        return 1;
    }
}

?>