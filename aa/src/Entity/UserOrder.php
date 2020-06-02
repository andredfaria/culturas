<?php
/**
 * Created by PhpStorm.
 * User: NandoKstroNet
 * Date: 05/02/20
 * Time: 15:25
 */

namespace Plataforma\Entity;

use Plataforma\DB\Entity;

class UserOrder extends Entity
{
	protected $table = 'user_orders';

	public function createOrder(array $data = [])
	{
		return $this->insert($data);
	}
}