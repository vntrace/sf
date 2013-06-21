<?php
namespace Acme\SecurityBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Acme\SecurityBundle\Entity\User;

class Registration
{
    /**
     * @Assert\Type(type="Acme\SecurityBundle\Entity\User")
     * @Assert\Valid()
     */
    protected $user;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}