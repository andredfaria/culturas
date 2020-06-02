<?php

namespace Plataforma\Entity;


use Plataforma\DB\Entity;

class Cadastro extends Entity
{
	protected $table = 'categories';
	static $filters = [
		'name' => FILTER_SANITIZE_STRING,
		'description' => FILTER_SANITIZE_STRING,
	];
	
	public function getIdCadastro($id)
	{	
		$id = (int)$id;

		$sql = 'SELECT * FROM culturas WHERE id = '.$id.' LIMIT 1';

		$edit = $this->conn->query($sql);

		$edit = $edit->fetchAll(\PDO::FETCH_ASSOC);

		return $edit[0];
	}
}