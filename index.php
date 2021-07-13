<?php 

    require_once 'autoload.php';

    if (isset($_GET['controller']) && class_exists($_GET['controller'])) {
        $controller = new $_GET['controller']();
        if (isset($_GET['action']) && method_exists($controller,$_GET['action'])) {
            $method = $_GET['action'];
            $action = $controller->$method();
        } else {
            echo 'Método no existe';
        }
    } else {
        echo 'El controlador no existe';
    }

?>