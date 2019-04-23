<?php

session_start();
$_SESSION["sessiontime"] = time() + 3600;
if (isset($_SESSION["sessiontime"])) {
    if ($_SESSION["sessiontime"] < time()) {
        session_unset(); //Redireciona para login
    } else {
        $_SESSION["sessiontime"] = time() + 3600;
    }
} else {
    session_unset(); //Redireciona para login
}
require 'config.php';


spl_autoload_register(function ($class) {
    if (file_exists('controllers/' . $class . '.php')) {
        require_once 'controllers/' . $class . '.php';
    } elseif (file_exists('models/' . $class . '.php')) {
        require_once 'models/' . $class . '.php';
    } elseif (file_exists('core/' . $class . '.php')) {
        require_once 'core/' . $class . '.php';
    }
});

$core = new Core();
$core->run();
