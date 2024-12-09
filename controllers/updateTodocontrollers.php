<?php
/** @var TYPE_NAME $todoId */
$todo = (new \App\Todo());
$todo->update(
    $todoId,
    $_POST['title'],
    $_POST['status'],
    $_POST['due_date']
);
redirect('/todos');