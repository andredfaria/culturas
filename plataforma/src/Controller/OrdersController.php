<?php
namespace Plataforma\Controller;

use Plataforma\Authenticator\CheckUserLogged;
use Plataforma\DB\Connection;
use Plataforma\Entity\UserOrder;
use Plataforma\Session\Session;
use Plataforma\View\View;

class OrdersController
{
	use CheckUserLogged;

	public function my()
	{
		if(!$this->check()) return header('Location: ' . HOME);

		$userId = Session::get('user')['id'];

		$userOrders = (new UserOrder(Connection::getInstance()))->where(['user_id' => $userId]);

		$view = new View('site/my_orders.phtml');
		$view->userOrders = $userOrders;

		return $view->render();
	}
}