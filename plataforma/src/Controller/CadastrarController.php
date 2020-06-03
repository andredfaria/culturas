<?php
namespace Plataforma\Controller;

use Plataforma\View\View;
use Plataforma\DB\Connection;
use Plataforma\Entity\Cadastro;

class CadastrarController
{
	public function index()
	{
		$view = new View('site/cadastrar.php');
		$id = 0;

		$conexao = Connection::getInstance();
		$edit = new Cadastro($conexao);

		// get o id do cadastrar
		if($_SERVER['REQUEST_URI'] == '/cadastrar/1' )
			$id = 1;
		
		$view->s = $edit->getIdCadastro($id);
		
		return $view->render();
	}

	public function teste(){
		var_dump($_POST);
	}
}