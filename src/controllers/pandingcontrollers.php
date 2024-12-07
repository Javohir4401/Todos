<?php
/** @var TYPE_NAME $todoId */
$todo = (new \App\Todo());
$todo->pending($todoId);
redirect('/todos');