<?php

    header("Content-Type: application/json");

    require_once "./vendor/autoload.php";

    $router = new \Bramus\Router\Router();

    

    $router->get('/api', function(){

        \App\academic_area\academic_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllAcademicArea();

    });

    $router->get('/api/otra', function(){
        echo "perras todas";
    });

    $router->run();

?>