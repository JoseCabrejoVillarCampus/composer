<?php

    header("Content-Type: application/json");

    require_once "./vendor/autoload.php";

    $router = new \Bramus\Router\Router();

    

    $router->get('/api', function(){

        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->getAllOptionalTopics();

    });

    $router->get('/api/otra', function(){
        echo "perras todas";
    });

    $router->run();

?>