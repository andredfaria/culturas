<?php
// use Doctrine\DBAL\Configuration;
// use Doctrine\DBAL\DriverManager;
require __DIR__ . '/vendor/autoload.php';

define('HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('VIEWS_PATH', __DIR__ . '/views/');

define('UPLOAD_PATH', __DIR__ . '/public/uploads/');
define('APP_DEBUG', true);

/**
 * Database config
 */
define('DB_NAME', 'tai');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'UTF8');


/**
 * PagSeguro Enviroments
 */
// putenv('PAGSEGURO_ENV=sandbox');
// putenv('PAGSEGURO_EMAIL=nandokstro@gmail.com');
// putenv('PAGSEGURO_TOKEN_SANDBOX=74AC9F13254844E592C46F81A546A41B');
// putenv('PAGSEGURO_CHARSET=UTF-8');

// \PagSeguro\Library::initialize();
// \PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
// \PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");