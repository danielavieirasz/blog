<?php
<<<<<<< HEAD

require __DIR__ .'/vendor/autoload.php';

use App\Http\Blog\HomeController;
use App\Http\Blog\PostController;
use Laminas\Diactoros\ServerRequestFactory;
use League\Route\Router;

Dotenv\Dotenv::createUnsafeImmutable(__DIR__)->load();

$request = ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);

$router = new Router;

$router->get('/', HomeController::class);
$router->get('/{slug}', PostController::class);

$response = $router->dispatch($request);

(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
=======
use Framework\Database\Connection;
require_once __DIR__ .  '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

dd($_ENV['DB_HOST']);
>>>>>>> c22342b6cb4b957064ac83aa7cc7a6eafbd144e3
