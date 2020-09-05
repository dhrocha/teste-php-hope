<?php

require_once('classes/views/View.php');

$parts = explode('?', $_SERVER['REQUEST_URI']);

$view = new View();
$view->render($parts[1]);