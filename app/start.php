<?php
ini_set('display_errors', 'on');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/cms/');

$db = new PDO('mysql:host=localhost;dbname=cms', 'root','');

require 'functions.php';