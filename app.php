<?php

use App\team_schedule_soft_skils\team_schedule_soft_skils;
use App\team_schedule_soft_skils\team_schedule_software_skiils;

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
    $router->put('/api/academic_area/put', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->putOptionalTopics();
    });
    $router->delete('/api/academic_area/del', function(){
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
    $router->put('/api/admin_area/put', function(){
        \App\admin_area\admin_area::getInstance(json_decode(file_get_contents("php://input"),true))->putAdminArea();
    });
    $router->delete('/api/admin_area/del', function(){
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
    $router->put('/api/areas/put', function(){
        \App\areas\areas::getInstance(json_decode(file_get_contents("php://input"),true))->putAdminArea();
    });
    $router->delete('/api/areas/del', function(){
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
    $router->put('/api/campers/put', function(){
        \App\campers\campers::getInstance(json_decode(file_get_contents("php://input"),true))->putCamper();
    });
    $router->delete('/api/campers/del', function(){
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
    $router->put('/api/chapters/put', function(){
        \App\chapters\chapters::getInstance(json_decode(file_get_contents("php://input"),true))->putChapters();
    });
    $router->delete('/api/chapters/del', function(){
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
    $router->put('/api/cities/put', function(){
        \App\cities\cities::getInstance(json_decode(file_get_contents("php://input"),true))->putCities();
    });
    $router->delete('/api/cities/del', function(){
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
    $router->put('/api/contact_info/put', function(){
        \App\contact_info\contact_info::getInstance(json_decode(file_get_contents("php://input"),true))->putContacInfo();
    });
    $router->delete('/api/contact_info/del', function(){
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
    $router->put('/api/countries/put', function(){
        \App\countries\countries::getInstance(json_decode(file_get_contents("php://input"),true))->putCountries();
    });
    $router->delete('/api/countries/del', function(){
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
    $router->put('/api/design_area/put', function(){
        \App\design_area\design_area::getInstance(json_decode(file_get_contents("php://input"),true))->putDesignArea();
    });
    $router->delete('/api/design_area/del', function(){
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
    $router->put('/api/emergency_contact/put', function(){
        \App\emergency_contact\emergency_contact::getInstance(json_decode(file_get_contents("php://input"),true))->putEmergencyContact();
    });
    $router->delete('/api/emergency_contact/del', function(){
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
    $router->put('/api/english_skills/put', function(){
        \App\english_skills\english_skills::getInstance(json_decode(file_get_contents("php://input"),true))->putEnglishSkills();
    });
    $router->delete('/api/english_skills/del', function(){
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
    $router->put('/api/journey/put', function(){
        \App\journey\journey::getInstance(json_decode(file_get_contents("php://input"),true))->putJourney();
    });
    $router->delete('/api/journey/del', function(){
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
    $router->put('/api/levels/put', function(){
        \App\levels\levels::getInstance(json_decode(file_get_contents("php://input"),true))->putLevels();
    });
    $router->delete('/api/levels/del', function(){
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
    $router->put('/api/locations/put', function(){
        \App\locations\locations::getInstance(json_decode(file_get_contents("php://input"),true))->putLocation();
    });
    $router->delete('/api/locations/del', function(){
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
    $router->put('/api/maint_area/put', function(){
        \App\maint_area\maint_area::getInstance(json_decode(file_get_contents("php://input"),true))->putMaintArea();
    });
    $router->delete('/api/maint_area/del', function(){
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
    $router->put('/api/marketing_area/put', function(){
        \App\marketing_area\marketing_area::getInstance(json_decode(file_get_contents("php://input"),true))->putMarketingArea();
    });
    $router->delete('/api/marketing_area/del', function(){
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
    $router->put('/api/modules/put', function(){
        \App\modules\modules::getInstance(json_decode(file_get_contents("php://input"),true))->putModules();
    });
    $router->delete('/api/modules/del', function(){
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
    $router->put('/api/optional_topics/put', function(){
        \App\optional_topics\optional_topics::getInstance(json_decode(file_get_contents("php://input"),true))->putOptionalTopics();
    });
    $router->delete('/api/optional_topics/del', function(){
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
    $router->put('/api/personal_ref/put', function(){
        \App\personal_ref\personal_ref::getInstance(json_decode(file_get_contents("php://input"),true))->putPersonalRef();
    });
    $router->delete('/api/personal_ref/del', function(){
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
    $router->put('/api/position/put', function(){
        \App\position\position::getInstance(json_decode(file_get_contents("php://input"),true))->putPosition();
    });
    $router->delete('/api/position/del', function(){
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
    $router->put('/api/psychologist/put', function(){
        \App\psychologist\psychologist::getInstance(json_decode(file_get_contents("php://input"),true))->putPsychologist();
    });
    $router->delete('/api/psychologist/del', function(){
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
    $router->put('/api/regions/put', function(){
        \App\regions\regions::getInstance(json_decode(file_get_contents("php://input"),true))->putRegions();
    });
    $router->delete('/api/regions/del', function(){
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
    $router->put('/api/review_skills/put', function(){
        \App\review_skills\review_skills::getInstance(json_decode(file_get_contents("php://input"),true))->putReviewSkills();
    });
    $router->delete('/api/review_skills/del', function(){
        \App\review_skills\review_skills::getInstance(json_decode(file_get_contents("php://input"),true))->deleteReviewSkills();
    });
    /*
    ?rutas  routes
    */
    $router->get('/api/routes', function(){
        \App\routes\routes::getInstance(json_decode(file_get_contents("php://input"),true))->getAllRoutes();
    });
    $router->post('/api/routes/post', function(){
        \App\routes\routes::getInstance(json_decode(file_get_contents("php://input"),true))->postRoutes();
    });
    $router->put('/api/routes/put', function(){
        \App\routes\routes::getInstance(json_decode(file_get_contents("php://input"),true))->putRoutes();
    });
    $router->delete('/api/routes/del', function(){
        \App\routes\routes::getInstance(json_decode(file_get_contents("php://input"),true))->deleteRoutes();
    });
    /*
    ?rutas  soft_skills
    */
    $router->get('/api/soft_skills', function(){
        \App\soft_skills\soft_skills::getInstance(json_decode(file_get_contents("php://input"),true))->getAllSoftSkill();
    });
    $router->post('/api/soft_skills/post', function(){
        \App\soft_skills\soft_skills::getInstance(json_decode(file_get_contents("php://input"),true))->postSoftSkill();
    });
    $router->put('/api/soft_skills/put', function(){
        \App\soft_skills\soft_skills::getInstance(json_decode(file_get_contents("php://input"),true))->putSoftSkill();
    });
    $router->delete('/api/soft_skills/del', function(){
        \App\soft_skills\soft_skills::getInstance(json_decode(file_get_contents("php://input"),true))->deleteSoftSkill();
    });
    /*
    ?rutas  software_skills
    */
    $router->get('/api/software_skills', function(){
        \App\software_skills\software_skills::getInstance(json_decode(file_get_contents("php://input"),true))->getAllSoftwareSkill();
    });
    $router->post('/api/software_skills/post', function(){
        \App\software_skills\software_skills::getInstance(json_decode(file_get_contents("php://input"),true))->postSoftwareSkill();
    });
    $router->put('/api/software_skills/put', function(){
        \App\software_skills\software_skills::getInstance(json_decode(file_get_contents("php://input"),true))->putSoftwareSkill();
    });
    $router->delete('/api/software_skills/del', function(){
        \App\software_skills\software_skills::getInstance(json_decode(file_get_contents("php://input"),true))->deleteSoftwareSkill();
    });
    /*
    ?rutas  staff
    */
    $router->get('/api/staff', function(){
        \App\staff\staff::getInstance(json_decode(file_get_contents("php://input"),true))->getAllStaff();
    });
    $router->post('/api/staff/post', function(){
        \App\staff\staff::getInstance(json_decode(file_get_contents("php://input"),true))->postStaff();
    });
    $router->put('/api/staff/put', function(){
        \App\staff\staff::getInstance(json_decode(file_get_contents("php://input"),true))->putStaff();
    });
    $router->delete('/api/staff/del', function(){
        \App\staff\staff::getInstance(json_decode(file_get_contents("php://input"),true))->deleteStaff();
    });
    /*
    ?rutas  subjects
    */
    $router->get('/api/subjects', function(){
        \App\subjects\subjects::getInstance(json_decode(file_get_contents("php://input"),true))->getAllSubjects();
    });
    $router->post('/api/subjects/post', function(){
        \App\subjects\subjects::getInstance(json_decode(file_get_contents("php://input"),true))->postSubjects();
    });
    $router->put('/api/subjects/put', function(){
        \App\subjects\subjects::getInstance(json_decode(file_get_contents("php://input"),true))->putSubjects();
    });
    $router->delete('/api/subjects/del', function(){
        \App\subjects\subjects::getInstance(json_decode(file_get_contents("php://input"),true))->deleteSubjects();
    });
    /*
    ?rutas  teachers
    */
    $router->get('/api/teachers', function(){
        \App\teachers\teachers::getInstance(json_decode(file_get_contents("php://input"),true))->getAllTeachers();
    });
    $router->post('/api/teachers/post', function(){
        \App\teachers\teachers::getInstance(json_decode(file_get_contents("php://input"),true))->postTeachers();
    });
    $router->put('/api/teachers/put', function(){
        \App\teachers\teachers::getInstance(json_decode(file_get_contents("php://input"),true))->putTeachers();
    });
    $router->delete('/api/teachers/del', function(){
        \App\teachers\teachers::getInstance(json_decode(file_get_contents("php://input"),true))->deleteTeachers();
    });
    /*
    ?rutas  team_educators
    */
    $router->get('/api/team_educators', function(){
        \App\team_educators\team_educators::getInstance(json_decode(file_get_contents("php://input"),true))->getAllTeamEducators();
    });
    $router->post('/api/team_educators/post', function(){
        \App\team_educators\team_educators::getInstance(json_decode(file_get_contents("php://input"),true))->postTeamEducators();
    });
    $router->put('/api/team_educators/put', function(){
        \App\team_educators\team_educators::getInstance(json_decode(file_get_contents("php://input"),true))->putTeamEducators();
    });
    $router->delete('/api/team_educators/del', function(){
        \App\team_educators\team_educators::getInstance(json_decode(file_get_contents("php://input"),true))->deleteTeamEducators();
    });
    /*
    ?rutas  team_schedule_english
    */
    $router->get('/api/team_schedule_english', function(){
        \App\team_schedule_english\team_schedule_english::getInstance(json_decode(file_get_contents("php://input"),true))->getAllTeamScheduleEnglish();
    });
    $router->post('/api/team_schedule_english/post', function(){
        \App\team_schedule_english\team_schedule_english::getInstance(json_decode(file_get_contents("php://input"),true))->postTeamScheduleEnglish();
    });
    $router->put('/api/team_schedule_english/put', function(){
        \App\team_schedule_english\team_schedule_english::getInstance(json_decode(file_get_contents("php://input"),true))->putTeamScheduleEnglish();
    });
    $router->delete('/api/team_schedule_english/del', function(){
        \App\team_schedule_english\team_schedule_english::getInstance(json_decode(file_get_contents("php://input"),true))->deleteTeamScheduleEnglish();
    });
    /*
    ?rutas  team_schedule_review
    */
    $router->get('/api/team_schedule_review', function(){
        \App\team_schedule_review\team_schedule_review::getInstance(json_decode(file_get_contents("php://input"),true))->getAllTeamScheduleReview();
    });
    $router->post('/api/team_schedule_review/post', function(){
        \App\team_schedule_review\team_schedule_review::getInstance(json_decode(file_get_contents("php://input"),true))->postTeamScheduleReview();
    });
    $router->put('/api/team_schedule_review/put', function(){
        \App\team_schedule_review\team_schedule_review::getInstance(json_decode(file_get_contents("php://input"),true))->putTeamScheduleReview();
    });
    $router->delete('/api/team_schedule_review/del', function(){
        \App\team_schedule_review\team_schedule_review::getInstance(json_decode(file_get_contents("php://input"),true))->deleteTeamScheduleReview();
    });
    /*
    ?rutas  team_schedule_soft_skils
    */
    $router->get('/api/team_schedule_soft_skils', function(){
        \App\team_schedule_soft_skils\team_schedule_soft_skils::getInstance(json_decode(file_get_contents("php://input"),true))->getAllTeamScheduleSoft();
    });
    $router->post('/api/team_schedule_soft_skils/post', function(){
        \App\team_schedule_soft_skils\team_schedule_soft_skils::getInstance(json_decode(file_get_contents("php://input"),true))->postTeamScheduleSoft();
    });
    $router->put('/api/team_schedule_soft_skils/put', function(){
        \App\team_schedule_soft_skils\team_schedule_soft_skils::getInstance(json_decode(file_get_contents("php://input"),true))->putTeamScheduleSoft();
    });
    $router->delete('/api/team_schedule_soft_skils/del', function(){
        \App\team_schedule_soft_skils\team_schedule_soft_skils::getInstance(json_decode(file_get_contents("php://input"),true))->deleteTeamScheduleSoft();
    });
    /*
    ?rutas  team_schedule_software_skiils
    */
    $router->get('/api/team_schedule_software_skiils', function(){
        \App\team_schedule_software_skiils\team_schedule_software_skiils::getInstance(json_decode(file_get_contents("php://input"),true))->getAllTeamSchedule();
    });
    $router->post('/api/team_schedule_software_skiils/post', function(){
        \App\team_schedule_software_skiils\team_schedule_software_skiils::getInstance(json_decode(file_get_contents("php://input"),true))->postTeamSchedule();
    });
    $router->put('/api/team_schedule_software_skiils/put', function(){
        \App\team_schedule_software_skiils\team_schedule_software_skiils::getInstance(json_decode(file_get_contents("php://input"),true))->putTeamSchedule();
    });
    $router->delete('/api/team_schedule_software_skiils/del', function(){
        \App\team_schedule_software_skiils\team_schedule_software_skiils::getInstance(json_decode(file_get_contents("php://input"),true))->deleteTeamSchedule();
    });
    /*
    ?rutas  thematic_units
    */
    $router->get('/api/thematic_units', function(){
        \App\thematic_units\thematic_units::getInstance(json_decode(file_get_contents("php://input"),true))->getAllThematicUnits();
    });
    $router->post('/api/thematic_units/post', function(){
        \App\thematic_units\thematic_units::getInstance(json_decode(file_get_contents("php://input"),true))->postThematicUnits();
    });
    $router->put('/api/thematic_units/put', function(){
        \App\thematic_units\thematic_units::getInstance(json_decode(file_get_contents("php://input"),true))->putThematicUnits();
    });
    $router->delete('/api/thematic_units/del', function(){
        \App\thematic_units\thematic_units::getInstance(json_decode(file_get_contents("php://input"),true))->deleteThematicUnits();
    });
    /*
    ?rutas  themes
    */
    $router->get('/api/themes', function(){
        \App\themes\themes::getInstance(json_decode(file_get_contents("php://input"),true))->getAllThems();
    });
    $router->post('/api/themes/post', function(){
        \App\themes\themes::getInstance(json_decode(file_get_contents("php://input"),true))->postThems();
    });
    $router->put('/api/themes/put', function(){
        \App\themes\themes::getInstance(json_decode(file_get_contents("php://input"),true))->putThems();
    });
    $router->delete('/api/themes/del', function(){
        \App\themes\themes::getInstance(json_decode(file_get_contents("php://input"),true))->deleteThems();
    });
    
    $router->run(); 

?>