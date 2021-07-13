<?php 

    function autoload ($class) {
        if (file_exists(__DIR__.'/controllers/'.$class.'.php')) {
            require_once __DIR__.'/controllers/'.$class.'.php';
        } else {
            return false;
        }
    }

    spl_autoload_register('autoload');
?>