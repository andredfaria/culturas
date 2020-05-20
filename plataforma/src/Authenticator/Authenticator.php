<?php
namespace Plataforma\Authenticator;

use Plataforma\Entity\User;
use Plataforma\Security\PasswordHash;
use Plataforma\Session\Session;

class Authenticator
{
	/**
	 * @var User
	 */
	private $user;

	public function __construct(User $user = null)
	{
		$this->user = $user;
	}

	public function login(array $credentials)
	{
		$user = $this->user->where([
			'email' => $credentials['email'],
		]);

		if(!$user){
			return false;
		}
		if(!PasswordHash::check($credentials['password'], $user['password'])) {
			return false;
		}

		unset($user['password']);
		Session::add('user', $user);
		return true;
	}

	public function logout()
	{
		if(Session::has('user')) {
			Session::remove('user');
		}
		Session::clear();
	}
}