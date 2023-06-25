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
    /*
    ?rutas  cities
    */
    $router->get('/api/cities', function(){
        \App\cities\cities::getInstance(json_decode(file_get_contents("php://input"),true))->getAllCities();
    });
    $router->post('/api/cities/post', function(){
        \App\cities\cities::getInstance(json_decode(file_get_contents("php://input"),true))->postCities();
    });
    $router->post('/api/cities/put', function(){
        \App\cities\cities::getInstance(json_decode(file_get_contents("php://input"),true))->putCities();
    });
    $router->post('/api/cities/del', function(){
        \App\cities\cities::getInstance(json_decode(file_get_contents("php://input"),true))->deleteCities();
    });
    /*
    ?rutas  contact_info
    */
    $router->get('/api/contact_info', function(){
        \App\contact_info\contact_info::getInstance(json_decode(file_get_contents("php://input"),true))->getAllContacInfo();
    });
    $router->post('/api/contact_info/post', function(){
        \App\contact_info\contact_info::getInstance(json_decode(file_get_contents("php://input"),true))->postContacInfo();
    });
    $router->post('/api/contact_info/put', function(){
        \App\contact_info\contact_info::getInstance(json_decode(file_get_contents("php://input"),true))->putContacInfo();
    });
    $router->post('/api/contact_info/del', function(){
        \App\contact_info\contact_info::getInstance(json_decode(file_get_contents("php://input"),true))->deleteContacInfo();
    });
    /*
    ?rutas  countries
    */
    $router->get('/api/countries', function(){
        \App\countries\countries::getInstance(json_decode(file_get_contents("php://input"),true))->getAllCountries();
    });
    $router->post('/api/countries/post', function(){
        \App\countries\countries::getInstance(json_decode(file_get_contents("php://input"),true))->postCountries();
    });
    $router->post('/api/countries/put', function(){
        \App\countries\countries::getInstance(json_decode(file_get_contents("php://input"),true))->putCountries();
    });
    $router->post('/api/countries/del', function(){
        \App\countries\countries::getInstance(json_decode(file_get_contents("php://input"),true))->deleteCountries();
    });
    /*
    ?rutas  design_area
    */
    $router->get('/api/design_area', function(){
        \App\design_area\design_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllDesignArea();
    });
    $router->post('/api/design_area/post', function(){
        \App\design_area\design_area::getInstance(json_decode(file_get_contents("php://input"),true))->postDesignArea();
    });
    $router->post('/api/design_area/put', function(){
        \App\design_area\design_area::getInstance(json_decode(file_get_contents("php://input"),true))->putDesignArea();
    });
    $router->post('/api/design_area/del', function(){
        \App\design_area\design_area::getInstance(json_decode(file_get_contents("php://input"),true))->deleteDesignArea();
    });
    /*
    ?rutas  emergency_contact
    */
    $router->get('/api/emergency_contact', function(){
        \App\emergency_contact\emergency_contact::getInstance(json_decode(file_get_contents("php://input"),true))->getAllEmergencyContact();
    });
    $router->post('/api/emergency_contact/post', function(){
        \App\emergency_contact\emergency_contact::getInstance(json_decode(file_get_contents("php://input"),true))->postEmergencyContact();
    });
    $router->post('/api/emergency_contact/put', function(){
        \App\emergency_contact\emergency_contact::getInstance(json_decode(file_get_contents("php://input"),true))->putEmergencyContact();
    });
    $router->post('/api/emergency_contact/del', function(){
        \App\emergency_contact\emergency_contact::getInstance(json_decode(file_get_contents("php://input"),true))->deleteEmergencyContact();
    });
    $router->run();

?>