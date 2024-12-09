<?php
/**@var TYPE_NAME $todoId*/
$todo = (new \App\Todo());
$getTodo = $todo->getTodo($todoId);
view('edit', [
    'todo'=>$getTodo
]);

