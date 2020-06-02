<?php
namespace Plataforma\Controller;

use Plataforma\View\View;
use Plataforma\DB\Connection;
use Plataforma\Entity\Culturas;

class ListarController
{
	public function index()
	{		
		$view = new View('site/listar.php');

		$conexao = Connection::getInstance();
		$culturas = new Culturas($conexao);

		$view->culturas = $culturas->getAll();

		return $view->render();
	}
}