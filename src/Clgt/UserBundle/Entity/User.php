<?php
namespace Clgt\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Clgt\UserBundle\Entity\User
 * 
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", length=127, unique=true)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $banner;
    
    /**
     * @ORM\Column(type="float")
     */
    private $balance;
    
    public function __construct() {
        
    }
    
    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getSalt() {
        return "";
    }

    public function getUsername() {
        return $this->username;
    }

    public function serialize() {
        return serialize(array(
            'id' => $this->id
        ));
    }

    public function unserialize($serialized) {
        return list($this->id) = unserialize($serialized);
    }    
}