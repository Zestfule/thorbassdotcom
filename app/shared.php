<?php



/*
 * Check for Magic Quotes and Remove Them
 */

function stripSlashesDeep($value)
{
    $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
    return $value;
}

function removeMagicQuotes()
{
    if (get_magic_quotes_gpc()) {
        $_GET    = stripSlashesDeep($_GET);
        $_POST   = stripSlashesDeep($_POST);
        $_COOKIE = stripSlashesDeep($_COOKIE);
    }
}

/*
 * Check if register_globals is On and remove them
 */

function unregisterGlobals()
{
    if (ini_get('register_globals')) {
        $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST',
                                   '_SERVER', '_ENV', '_FILES');
        foreach ($array as $value) {
            foreach ($GLOBALS[$value] as $key => $var) {
                if ($var == $GLOBALS[$key]) {
                    unset($GLOBALS[$key]);
                }
            }
        }
    }
}

/*
 * Process URL and call controller/action/etc.
 */

function callHook()
{
    global $url;

    $urlArray = array();
    $urlArray = explode('/', $url);

    $controller  = $urlArray[0];
    array_shift($urlArray);
    $action      = $urlArray[0];
    array_shift($urlArray);
    $queryString = $urlArray;

    $controllerName = $controller;
    $controller = ucwords($controller);
    $model = rtrim($controller, 's');
    $controller .= 'Controller';
    $dispatch = new $controller($model,$controllerName,$action);

    if ((int)method_exists($controller, $action)) {
        call_user_func_array(array($dispatch,$action), $queryString);
    } else {
        // Error 404?
    }
}

/*
 * Autoload Classes
 */

function __autoload($className)
{
}

setReporting();
removeMagicQuotes();
unregisterGlobals();
callHook();