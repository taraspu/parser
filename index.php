<?php
//FRONT CONTROLLER

require_once 'index.html';
die;
// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);




// 2. Include system files
define('ROOT', __DIR__);
require_once (ROOT.'/components/Router.php');
// 3. Connect Db

// 4. Call Router

$object = new Router();
$object->Run();
