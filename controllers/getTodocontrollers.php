<?php
$todo = (new \App\Todo());
$todos = $todo->getAllTodos();
view('todos', ['todos' => $todos]);