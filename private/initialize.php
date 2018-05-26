<?php
ob_start();  // output buffering is turned on.
    // Assign file paths to PHP constants
    // __FILE__ returns the current path to this file
    // dirname() returns the path the the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');


    // Assign the root URL to a PHP Constant
    // * Do not need to include the domain
    // * use same document root as webserver
    // * Can set a hard coded value
    // define("WWW_ROOT", '/~)
    // define("WWW_ROOT", '')
    // * can dynamically find everything in URL up to "/public"
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);




    require_once('functions.php');
    require_once('database.php');

    $db = db_connect();

?>