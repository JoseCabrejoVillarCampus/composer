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
    /*
    ?rutas  english_skills
    */
    $router->get('/api/english_skills', function(){
        \App\english_skills\english_skills::getInstance(json_decode(file_get_contents("php://input"),true))->getAllEnglishSkills();
    });
    $router->post('/api/english_skills/post', function(){
        \App\english_skills\english_skills::getInstance(json_decode(file_get_contents("php://input"),true))->postEnglishSkills();
    });
    $router->post('/api/english_skills/put', function(){
        \App\english_skills\english_skills::getInstance(json_decode(file_get_contents("php://input"),true))->putEnglishSkills();
    });
    $router->post('/api/english_skills/del', function(){
        \App\english_skills\english_skills::getInstance(json_decode(file_get_contents("php://input"),true))->deleteEnglishSkills();
    });
    /*
    ?rutas  journey
    */
    $router->get('/api/journey', function(){
        \App\journey\journey::getInstance(json_decode(file_get_contents("php://input"),true))->getAllJourney();
    });
    $router->post('/api/journey/post', function(){
        \App\journey\journey::getInstance(json_decode(file_get_contents("php://input"),true))->postJourney();
    });
    $router->post('/api/journey/put', function(){
        \App\journey\journey::getInstance(json_decode(file_get_contents("php://input"),true))->putJourney();
    });
    $router->post('/api/journey/del', function(){
        \App\journey\journey::getInstance(json_decode(file_get_contents("php://input"),true))->deleteJourney();
    });
    /*
    ?rutas  levels
    */
    $router->get('/api/levels', function(){
        \App\levels\levels::getInstance(json_decode(file_get_contents("php://input"),true))->getAllLevels();
    });
    $router->post('/api/levels/post', function(){
        \App\levels\levels::getInstance(json_decode(file_get_contents("php://input"),true))->postLevels();
    });
    $router->post('/api/levels/put', function(){
        \App\levels\levels::getInstance(json_decode(file_get_contents("php://input"),true))->putLevels();
    });
    $router->post('/api/levels/del', function(){
        \App\levels\levels::getInstance(json_decode(file_get_contents("php://input"),true))->deleteLevels();
    });
    /*
    ?rutas  locations
    */
    $router->get('/api/locations', function(){
        \App\locations\locations::getInstance(json_decode(file_get_contents("php://input"),true))->getAllLocation();
    });
    $router->post('/api/locations/post', function(){
        \App\locations\locations::getInstance(json_decode(file_get_contents("php://input"),true))->postLocation();
    });
    $router->post('/api/locations/put', function(){
        \App\locations\locations::getInstance(json_decode(file_get_contents("php://input"),true))->putLocation();
    });
    $router->post('/api/locations/del', function(){
        \App\locations\locations::getInstance(json_decode(file_get_contents("php://input"),true))->deleteLocation();
    });
    /*
    ?rutas  maint_area
    */
    $router->get('/api/maint_area', function(){
        \App\maint_area\maint_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllMaintArea();
    });
    $router->post('/api/maint_area/post', function(){
        \App\maint_area\maint_area::getInstance(json_decode(file_get_contents("php://input"),true))->postMaintArea();
    });
    $router->post('/api/maint_area/put', function(){
        \App\maint_area\maint_area::getInstance(json_decode(file_get_contents("php://input"),true))->putMaintArea();
    });
    $router->post('/api/maint_area/del', function(){
        \App\maint_area\maint_area::getInstance(json_decode(file_get_contents("php://input"),true))->deleteMaintArea();
    });
    /*
    ?rutas  marketing_area
    */
    $router->get('/api/marketing_area', function(){
        \App\marketing_area\marketing_area::getInstance(json_decode(file_get_contents("php://input"),true))->getAllMarketingArea();
    });
    $router->post('/api/marketing_area/post', function(){
        \App\marketing_area\marketing_area::getInstance(json_decode(file_get_contents("php://input"),true))->postMarketingArea();
    });
    $router->post('/api/marketing_area/put', function(){
        \App\marketing_area\marketing_area::getInstance(json_decode(file_get_contents("php://input"),true))->putMarketingArea();
    });
    $router->post('/api/marketing_area/del', function(){
        \App\marketing_area\marketing_area::getInstance(json_decode(file_get_contents("php://input"),true))->deleteMarketingArea();
    });
    /*
    ?rutas  modules
    */
    $router->get('/api/modules', function(){
        \App\modules\modules::getInstance(json_decode(file_get_contents("php://input"),true))->getAllModules();
    });
    $router->post('/api/modules/post', function(){
        \App\modules\modules::getInstance(json_decode(file_get_contents("php://input"),true))->postModules();
    });
    $router->post('/api/modules/put', function(){
        \App\modules\modules::getInstance(json_decode(file_get_contents("php://input"),true))->putModules();
    });
    $router->post('/api/modules/del', function(){
        \App\modules\modules::getInstance(json_decode(file_get_contents("php://input"),true))->deleteModules();
    });
    /*
    ?rutas  optional_topics
    */
    $router->get('/api/optional_topics', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->getAllOptionalTopics();
    });
    $router->post('/api/optional_topics/post', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->postOptionalTopics();
    });
    $router->post('/api/optional_topics/put', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->putOptionalTopics();
    });
    $router->post('/api/optional_topics/del', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->deleteOptionalTopics();
    });
    /*
    ?rutas  personal_ref
    */
    $router->get('/api/personal_ref', function(){
        \App\personal_ref\personal_ref::getInstance(json_decode(file_get_contents("php://input"),true))->getAllPersonalRef();
    });
    $router->post('/api/personal_ref/post', function(){
        \App\personal_ref\personal_ref::getInstance(json_decode(file_get_contents("php://input"),true))->postPersonalRef();
    });
    $router->post('/api/personal_ref/put', function(){
        \App\personal_ref\personal_ref::getInstance(json_decode(file_get_contents("php://input"),true))->putPersonalRef();
    });
    $router->post('/api/personal_ref/del', function(){
        \App\personal_ref\personal_ref::getInstance(json_decode(file_get_contents("php://input"),true))->deletePersonalRef();
    });
    /*
    ?rutas  position
    */
    $router->get('/api/position', function(){
        \App\position\position::getInstance(json_decode(file_get_contents("php://input"),true))->getAllPosition();
    });
    $router->post('/api/position/post', function(){
        \App\position\position::getInstance(json_decode(file_get_contents("php://input"),true))->postPosition();
    });
    $router->post('/api/position/put', function(){
        \App\position\position::getInstance(json_decode(file_get_contents("php://input"),true))->putPosition();
    });
    $router->post('/api/position/del', function(){
        \App\position\position::getInstance(json_decode(file_get_contents("php://input"),true))->deletePosition();
    });
    /*
    ?rutas  psychologist
    */
    $router->get('/api/psychologist', function(){
        \App\psychologist\psychologist::getInstance(json_decode(file_get_contents("php://input"),true))->getAllPsychologist();
    });
    $router->post('/api/psychologist/post', function(){
        \App\psychologist\psychologist::getInstance(json_decode(file_get_contents("php://input"),true))->postPsychologist();
    });
    $router->post('/api/psychologist/put', function(){
        \App\psychologist\psychologist::getInstance(json_decode(file_get_contents("php://input"),true))->putPsychologist();
    });
    $router->post('/api/psychologist/del', function(){
        \App\psychologist\psychologist::getInstance(json_decode(file_get_contents("php://input"),true))->deletePsychologist();
    });
    /*
    ?rutas  regions
    */
    $router->get('/api/regions', function(){
        \App\regions\regions::getInstance(json_decode(file_get_contents("php://input"),true))->getAllRegions();
    });
    $router->post('/api/regions/post', function(){
        \App\regions\regions::getInstance(json_decode(file_get_contents("php://input"),true))->postRegions();
    });
    $router->post('/api/regions/put', function(){
        \App\regions\regions::getInstance(json_decode(file_get_contents("php://input"),true))->putRegions();
    });
    $router->post('/api/regions/del', function(){
        \App\regions\regions::getInstance(json_decode(file_get_contents("php://input"),true))->deleteRegions();
    });
    /*
    ?rutas  review_skills
    */
    $router->get('/api/review_skills', function(){
        \App\review_skills\review_skills::getInstance(json_decode(file_get_contents("php://input"),true))->getAllReviewSkills();
    });
    $router->post('/api/review_skills/post', function(){
        \App\review_skills\review_skills::getInstance(json_decode(file_get_contents("php://input"),true))->postReviewSkills();
    });
    $router->post('/api/review_skills/put', function(){
        \App\review_skills\review_skills::getInstance(json_decode(file_get_contents("php://input"),true))->putReviewSkills();
    });
    $router->post('/api/review_skills/del', function(){
        \App\review_skills\review_skills::getInstance(json_decode(file_get_contents("php://input"),true))->deleteReviewSkills();
    });
    $router->run();

?>