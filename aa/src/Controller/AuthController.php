<?php
namespace Plataforma\Controller;

use Plataforma\Authenticator\Authenticator;
use Plataforma\DB\Connection;
use Plataforma\Entity\User;
use Plataforma\Session\Flash;
use Plataforma\View\View;

class AuthController
{
	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user = new User(Connection::getInstance());
			$authenticator = new Authenticator($user);

			if(!$authenticator->login($_POST)) {
				Flash::add("warning","Usuário ou senha incorretos!");
				return header("Location: " . HOME . '/auth/login');
			}

			Flash::add("success","Usuário logado com suceso!");
			return header("Location: " . HOME . '/admin/products');
		}
		$view = new View('auth/index.phtml');
		return $view->render();
	}

	public function logout()
	{
		$auth = (new Authenticator())->logout();
		Flash::add('success', 'Usuário deslogado com sucesso!');
		return header("Location: " . HOME);
	}
}