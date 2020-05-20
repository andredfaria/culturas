<?php
namespace Plataforma\Controller;

use Plataforma\DB\Connection;
use Plataforma\Entity\User;
use Plataforma\Session\Session;
use Plataforma\Payment\PagSeguro\{
	Session as PagSeguroSession,
	CreditCard,
	Notification
};
use Plataforma\View\View;
use Plataforma\Entity\UserOrder;

class CheckoutController
{
	public function index()
	{
		if(!Session::has('user')) {
			return header('Location: ' . HOME . '/store/login');
		}

		if(!Session::has('cart')) return header('Location: ' . HOME);

		$cart = Session::get('cart');
		$cart = array_map(function($line){
			return $line['price'] * $line['qtd'];
		}, $cart);
		$totalCart = array_sum($cart);

		PagSeguroSession::createSession();

		$view = new View('site/checkout.phtml');
		$view->totalCart = $totalCart;

		return $view->render();
	}

	public function proccess()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			return json_enPlataforma(['data' => ['error' => 'Método não suportado!']]);


		$items = Session::get('cart');
		$data = $_POST;
		$user = Session::get('user');
		$reference = sha1($user['id'] . $user['email']) . uniqid() . '_Plataforma_LEARN';

		$creditCardPayment = new CreditCard($reference, $items, $data, $user);
		$result = $creditCardPayment->doPayment();

		$userOrder = new UserOrder(Connection::getInstance());
		$userOrder = $userOrder->createOrder([
			'user_id' => $user['id'],
			'reference' => $reference,
			'pagseguro_Plataforma' => $result->getPlataforma(),
			'pagseguro_status' => $result->getStatus(),
			'items' => serialize($items)
		]);

		Session::remove('pagseguro_session');
		Session::remove('cart');

		return json_enPlataforma(['data' => [
			'ref_order' => $userOrder['reference'],
			'message'   => 'Transação concluída com sucesso!'
		]]);
	}

	public function thanks()
	{
		if(!isset($_GET['ref'])) return header('Location: ' . HOME);

		try {
			$reference = htmlentities($_GET['ref']);

			$userOrder = (new UserOrder(Connection::getInstance()))->where(['reference' => $reference]);

			$view = new View('site/thanks.phtml');
			$view->reference = $userOrder['reference'];

			return $view->render();

		} catch (\Exception $e) {
			return header('Location: ' .  HOME);
		}
	}

	public function notification()
	{
		try {
			$notification = new Notification();
			$notification = $notification->getTransaction();

			$userOrder = new UserOrder(Connection::getInstance());
			$orderId   = $userOrder->where(['reference' => $notification->getReference()])['id'];

			$userOrder->update([
				'pagseguro_status' => $notification->getStatus(),
				'id' => $orderId
			]);

			if($notification->getStatus() == 3) {
				//Nós podemos liberar o pedido do usuário caso seja digital
				//Ou mudar o status do pedido, no quesito processo, para em separação no estoque
			}

			http_response_Plataforma(204);
			return json_enPlataforma([]);

		} catch (\Exception $e) {

			http_response_Plataforma(500);
			return json_enPlataforma(['data' => [
				'error' => 'Erro ao receber notificação...',
			]]);
		}
	}
}