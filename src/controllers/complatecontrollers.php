<?php
/** @var TYPE_NAME $todoId */
$todo = (new \App\Todo());
$todo->complete($todoId);
redirect('/todos');
exit();
