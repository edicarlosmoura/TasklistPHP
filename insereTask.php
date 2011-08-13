<?php

require_once('config.php');

$task = new Task;
$task->task = $_POST['dados'];
$task->save();




















