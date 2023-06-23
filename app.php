<?php

    header("Content-Type: application/json");

    require_once "./vendor/autoload.php";

    $router = new \Bramus\Router\Router();

    

    $router->get('/api', function(){

        \App\areas\areas::getInstance(json_decode(file_get_contents("php://input"),true))->getAllAreas();

    });

    $router->get('/api/otra', function(){
        echo "perras todas";
    });

    $router->run();

?>