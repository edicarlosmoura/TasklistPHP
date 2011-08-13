<?php

require_once('config.php');

$tasks = Doctrine_Core::getTable('Task');
$task = $tasks->find($_POST['id']);
$task->delete();



















