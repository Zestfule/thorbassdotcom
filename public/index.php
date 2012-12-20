<?php

define('PROJECT_ROOT', dirname(dirname(__FILE__)));

require_once ('..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php');
require_once (APP_DIRECTORY . DIRECTORY_SEPARATOR . 'SplClassLoader.php');

/*
 * Define Zestify library into the autoloader
 * TODO: define controller/action/etc. into autoloader?
 */
$autoloader = new SplClassLoader('Zestify', '..' . DIRECTORY_SEPARATOR . 'lib');
$autoloader->register();

/*
 * Development Environment and Error Reporting
 */
if (DEVELOPMENT_ENVIRONMENT == true) {
    error_reporting(E_ALL);
    ini_set('display_errors','On');
} else {
    error_reporting(E_ALL);
    ini_set('display_errors','Off');
    ini_set('log_errors', 'On');
    ini_set('error_log', PROJECT_ROOT . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'logs'
                                      . DIRECTORY_SEPARATOR . 'error.log');
}

$app = new Zestify\Bootstrap();