<?php

    $print = function($class){
        if(file_exists('crud2/'.$class.'.php')) {
            include_once('crud2/'.$class.'.php');
            
        }
    };

    spl_autoload_register($print);


    define ('HOST', 'localhost');
    define('DATABASE','cadastramento');
    define('USER','root');
    define('PASSWORD','');

?>