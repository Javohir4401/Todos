<?php

require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$router = new Router();

$todo = new Todo();

$router->get('/', function () {
    header('Location: /todos');
});

$router->get('/edit', function () {
    view('edit');
});

$router->get('/todos/{id}/edit', function ($todoId) {
    echo 'Edit the task: ' . $todoId;
});

$router->get('/todos', function () use ($todo) {
    $todos = $todo->getAllTodos();
    view('home', ['todos' => $todos]);
});

$router->post('/todos', function () use ($todo) {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        header('Location: /todos');
    }
});

$router->get('/todos/{id}/complete', function ($todoId) use ($todo) {
    $todo->complete($todoId);
    header('Location: /todos');
    exit();
});

$router->get('/todos/{id}/in-progress', function ($todoId) use ($todo) {
    $todo->inProgress($todoId);
    header('Location: /todos');
});

$router->get('/todos/{id}/pending', function ($todoId) use ($todo) {
    $todo->pending($todoId);
    header('Location: /todos');
});

$router->get('/todos/{id}/delete', function ($todoId) use ($todo) {
    $todo->destroy($todoId);
    redirect('/todos');
});
