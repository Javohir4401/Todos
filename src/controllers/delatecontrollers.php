<?php
/** @var TYPE_NAME $todoId */
$todo = (new \App\Todo());
$todo->destroy($todoId);
redirect('/todos');