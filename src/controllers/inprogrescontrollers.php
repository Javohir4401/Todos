<?php
/** @var TYPE_NAME $todoId */
$todo = (new \App\Todo());
$todo->inProgress($todoId);
redirect('/todos');