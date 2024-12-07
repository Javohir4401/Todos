<?php

require 'bootstrap.php';

use App\Todo;
use App\Router;

require 'helpers.php';

$router = new Router();
$todo = new Todo();

$router->get('/', fn () => require 'src/controllers/homecontrollers.php');

$router->get('/todos', fn() => require 'src/controllers/getTodocontrollers.php');

$router->put('/todos/{id}/update', fn ($todoId) => require 'src/controllers/updateTodocontrollers.php');

$router->get('/todos/{id}/edit', fn ($todoId) => require 'src/controllers/editTodocontrollers.php');

$router->get('/todos/{id}/complete', fn ($todoId) => require 'src/controllers/complatecontrollers.php');

$router->get('/todos/{id}/in-progress', fn ($todoId) => require 'src/controllers/inprogrescontrollers.php');

$router->get('/todos/{id}/pending', fn ($todoId) => require 'src/controllers/pandingcontrollers.php');

$router->get('/todos/{id}/delete', fn ($todoId) => require 'src/controllers/delatecontrollers.php');

$router->post('/todos', function () use ($todo) {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        redirect('/todos');
    }
});