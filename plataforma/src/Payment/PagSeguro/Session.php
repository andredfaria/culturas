<?php
namespace Plataforma\Payment\PagSeguro;

use Plataforma\Session\Session as PlataformaSession;

class Session
{
	public static function createSession()
	{
		if(!PlataformaSession::has('pagseguro_session')) {
			$sessionPlataforma = \PagSeguro\Services\Session::create(
				\PagSeguro\Configuration\Configure::getAccountCredentials()
			);

			PlataformaSession::add('pagseguro_session', $sessionPlataforma->getResult());
		}
	}
}