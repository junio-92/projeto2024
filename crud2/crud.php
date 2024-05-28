<?php

    $print = function($class){
        if(file_exists('crud2/'.$class.'.php')) {
            include_once('crud2/'.$class.'php');
            
        }
    };

    spl_autoload_register($print);

?>