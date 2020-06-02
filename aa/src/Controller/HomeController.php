<?php
namespace Plataforma\Controller;

use Plataforma\DB\Connection;
use Plataforma\View\View;
use Plataforma\Entity\Product;

class HomeController
{
	public function index()
	{
		$view = new View('site/index.phtml');
		$view->products = (new Product(Connection::getInstance()))->getAllProductsWithThumb();

		return $view->render();
	}
}