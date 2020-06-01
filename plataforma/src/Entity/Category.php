<?php

namespace Plataforma\Entity;


use Plataforma\DB\Entity;

class Category extends Entity
{
	protected $table = 'categories';
	static $filters = [
		'name' => FILTER_SANITIZE_STRING,
		'description' => FILTER_SANITIZE_STRING,
	];
}