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

		// get o id do cadastrar
		if($_SERVER['REQUEST_URI'] == '/cadastrar/1' ){
			$conexao = Connection::getInstance();
			$edit = new Cadastro($conexao);
			// var_dump(str_replace($_SERVER['REQUEST_URI']));		
	
			$view->edit = $edit->getIdCadastro(1);
			// var_dump($view->edit);
		}
	
		return $view->render();
	}
}