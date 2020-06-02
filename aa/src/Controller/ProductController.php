<?php
namespace Plataforma\Controller;

use Plataforma\DB\Connection;
use Plataforma\Entity\Product;
use Plataforma\View\View;

class ProductController
{
	public function view($slug)
	{
		$product = (new Product(Connection::getInstance()))->getProductWithImagesById($slug, true);

		$lgPhoto = isset($product['images']) && count($product['images']) ? array_shift($product['images']) : false;

		$view = new View('site/single.phtml');
		$view->product = $product;

		$view->lgPhoto = $lgPhoto;

		return $view->render();
	}
}