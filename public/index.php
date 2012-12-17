<?php

define('PROJECT_ROOT', dirname(dirname(__FILE__)));

require_once ('..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php');
require_once (APP_DIRECTORY . DIRECTORY_SEPARATOR . 'SplClassLoader.php');

$autoloader = new SplClassLoader('Zestify', '..' . DIRECTORY_SEPARATOR . 'lib');
$autoloader->register();

$app = new Zestify\Bootstrap();