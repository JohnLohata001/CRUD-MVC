<?php

define('BASE_URL', '/mvc_crud/public');
require '../App/core/App.php';
require '../App/core/Controller.php';
require '../App/core/Model.php';
require '../App/core/helpers.php';


$app = new App();
$app->loadController();
