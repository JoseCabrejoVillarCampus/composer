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
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllAdminArea();
    });
    $router->post('/api/admin_area/post', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->postAdminArea();
    });
    $router->post('/api/admin_area/put', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->putAdminArea();
    });
    $router->post('/api/admin_area/del', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->deleteAdminArea();
    });
    /*
    ?rutas  areas
    */
    $router->get('/api/areas', function(){
        \App\areas\areas::getInstance(json_decode(file_get_contents("php://input"),true))->getAllAreas();
    });
    $router->post('/api/areas/post', function(){
        \App\areas\areas::getInstance(json_decode(file_get_contents("php://input"),true))->postAreas();
    });
    $router->post('/api/areas/put', function(){
        \App\areas\areas::getInstance(json_decode(file_get_contents("php://input"),true))->putAdminArea();
    });
    $router->post('/api/areas/del', function(){
        \App\areas\areas::getInstance(json_decode(file_get_contents("php://input"),true))->deleteAreas();
    });
    /*
    ?rutas  campers
    */
    $router->get('/api/campers', function(){
        \App\campers\campers::getInstance(json_decode(file_get_contents("php://input"),true))->getAllCamper();
    });
    $router->post('/api/campers/post', function(){
        \App\campers\campers::getInstance(json_decode(file_get_contents("php://input"),true))->postCamper();
    });
    $router->post('/api/campers/put', function(){
        \App\campers\campers::getInstance(json_decode(file_get_contents("php://input"),true))->putCamper();
    });
    $router->post('/api/campers/del', function(){
        \App\campers\campers::getInstance(json_decode(file_get_contents("php://input"),true))->deleteCamper();
    });
    /*
    ?rutas  chapters
    */
    $router->get('/api/chapters', function(){
        \App\chapters\chapters::getInstance(json_decode(file_get_contents("php://input"),true))->getAllChapters();
    });
    $router->post('/api/chapters/post', function(){
        \App\chapters\chapters::getInstance(json_decode(file_get_contents("php://input"),true))->postChapters();
    });
    $router->post('/api/chapters/put', function(){
        \App\chapters\chapters::getInstance(json_decode(file_get_contents("php://input"),true))->putChapters();
    });
    $router->post('/api/chapters/del', function(){
        \App\chapters\chapters::getInstance(json_decode(file_get_contents("php://input"),true))->deleteChapters();
    });
    $router->run();

?>