<?php

// Dev. Environment (true/false)
define('DEVELOPMENT_ENVIRONMENT', true);

// MVC layout
define('APP_DIRECTORY', PROJECT_ROOT . DIRECTORY_SEPARATOR . 'app');
define('CONTROLLER_DIRECTORY', APP_DIRECTORY . DIRECTORY_SEPARATOR . 'controllers');
define('MODEL_DIRECTORY', APP_DIRECTORY . DIRECTORY_SEPARATOR . 'models');
define('VIEW_DIRECTORY', APP_DIRECTORY . DIRECTORY_SEPARATOR . 'views');

// MVC Defaults
define('DEFAULT_CONTROLLER', 'index');

// Database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'thorbass');

// Website Information
define('WEBSITE_URL', 'http://thorbass.dev');