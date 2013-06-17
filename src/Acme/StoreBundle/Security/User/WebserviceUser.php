<?php
namespace Acme\StoreBundle\Security\User;

use Symfony\Component\Security\Core\User\UserInterface;

class WebserviceUser extends UserInterface
{
	private $username;
	private $password;
	private $salt;
	private $roles;

	public function __construct($username, $password, $salt, array $roles)
	{
		$this->username = $username;
		$this->password = $password;
		$this->salt = $salt;
		$this->roles = $roles;
	}

	public function getRoles()
	{
		return $this->roles;
	}

	public function getSalt()
	{
		return $this->salt;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function eraseCredentials()
	{

	}

	public function equals(UserInterface $user)
	{
		if(!$user instanceof WebserviceUser) {
			return false;
		}

		if($this->password !== $user->getPassword()) {
			return false;
		}

		if($this->getSalt() !== $user->getSalt()) {
			return false;
		}

		if($this->username !== $user->username) {
			return false;
		}

		return true;
	}
}