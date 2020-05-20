<?php
namespace Plataforma\Authenticator;

use Plataforma\Session\Session;

trait CheckUserLogged
{
	public function check()
	{
		return Session::has('user');
	}
}