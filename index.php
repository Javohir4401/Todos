<?php

require 'bootstrap.php';

use App\Todo;
use App\Router;

require 'helpers.php';

$router = new Router();
$todo = new Todo();

$router->get('/register', fn() => view('register'));

$router->get('/login', fn() => view('login'));

$router->get('/', fn() => view('home'));

$router->get('/todos', fn() => require 'controllers/getTodocontrollers.php');

$router->put('/todos/{id}/update', fn ($todoId) => require 'controllers/updateTodocontrollers.php');

$router->get('/todos/{id}/edit', fn ($todoId) => require 'controllers/editTodocontrollers.php');

$router->get('/todos/{id}/complete', fn ($todoId) => require 'controllers/complatecontrollers.php');

$router->get('/todos/{id}/in-progress', fn ($todoId) => require 'controllers/inprogrescontrollers.php');

$router->get('/todos/{id}/pending', fn ($todoId) => require 'controllers/pandingcontrollers.php');

$router->get('/todos/{id}/delete', fn ($todoId) => require 'controllers/delatecontrollers.php');

$router->post('/todos', fn () => require 'controllers/Controllers.php');
