<?php
// src/AppBundle/Entity/Feedback.php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

class Feedback
{
    protected $name;
    protected $email;
    protected $message;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getMessage(){
        return $this->message;
    }
    public function setMessage($message){
        $this->message = $message;
    }
    public static function loadValidatorMetadata(ClassMetadata $metadata){

        $metadata->addPropertyConstraint('name', new Assert\NotBlank([
            'message' => 'Should not be empty'
        ]));
        $metadata->addPropertyConstraint('email', new Assert\NotBlank([
            'message' => 'Should not be empty'
        ]));
        $metadata->addPropertyConstraint('email', new Assert\Email([
            'message' => 'doesn\'t looks like correct email'
        ]));
        $metadata->addPropertyConstraint('message', new Assert\NotBlank([
            'message' => 'Should not be empty'
        ]));

    }

}

?>