<?php

    header("Content-Type: application/json");

    require_once "./vendor/autoload.php";

    $router = new \Bramus\Router\Router();

    
    /* 
    ? rutas academic_area
    */
    $router->get('/api/academic_area', function(){
        \App\academic_area\academic_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllAcademicArea();
    });
    $router->post('/api/academic_area/post', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->postOptionalTopics();
    });
    $router->post('/api/academic_area/put', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->putOptionalTopics();
    });
    $router->post('/api/academic_area/del', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->deleteOptionalTopics();
    });
    /*
    ?rutas  admin_area
    */
    $router->get('/api/admin_area', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllAcademicArea();
    });
    $router->post('/api/admin_area/post', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->postOptionalTopics();
    });
    $router->post('/api/admin_area/put', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->putOptionalTopics();
    });
    $router->post('/api/admin_area/del', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->deleteOptionalTopics();
    });
    
    
    $router->run();

?>