<?php
namespace App\english_skills;
use App\db\connect;
use App\getInstance;
class english_skills extends connect
{
    private $queryPost = 'INSERT INTO english_skills(id,id_team_schedule,id_journey,id_teacher,id_location,id_subject) VALUES(:identificacion,:team,:journey,:teacher,:location,:subject)';
    private $queryGetAll = 'SELECT english_skills.*, team_schedule_software_skiils.team_name AS team_schedule_name, journey.name_journey AS journey_name, teachers.id AS teachers_id, locations.name_location AS location_name, subjects.name_subject AS subject_name 
    FROM english_skills 
    INNER JOIN team_schedule_software_skiils ON english_skills.id_team_schedule = team_schedule_software_skiils.id 
    INNER JOIN journey ON english_skills.id_journey = journey.id 
    INNER JOIN teachers ON english_skills.id_teacher = teachers.id 
    INNER JOIN locations ON english_skills.id_location = locations.id 
    INNER JOIN subjects ON english_skills.id_subject = subjects.id';
    private $queryUpdate = 'UPDATE english_skills SET id = :identificacion, id_team_schedule = :team, id_journey = :journey, id_teacher = :teacher, id_location = :location, id_subject = :subject  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM english_skills WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, private $id_team_schedule=1, private $id_journey=1, private $id_teacher=1, private $id_location=1, private $id_subject=1)
    {
        parent::__construct();
    }
    public function postEnglishSkills()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("team",$this->id_team_schedule);
            $res->bindValue("journey", $this->id_journey);
            $res->bindValue("teacher",$this->id_teacher);
            $res->bindValue("location", $this->id_location);
            $res->bindValue("subject",$this->id_subject);
            $res->execute();
            $this->message = json_encode(["Code" => 200 + $res->rowCount(), "Message" => "inserted data"]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function getAllEnglishSkills()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("team", 1);
            $res->bindValue("journey", 1);
            $res->bindValue("teacher", 1);
            $res->bindValue("location", 1);
            $res->bindValue("subject", 1);
            $this->message = json_encode(["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function putEnglishSkills()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("team",$this->id_team_schedule);
            $res->bindValue("journey", $this->id_journey);
            $res->bindValue("teacher",$this->id_teacher);
            $res->bindValue("location", $this->id_location);
            $res->bindValue("subject",$this->id_subject);
            $res->execute();

            if ($res->rowCount() > 0) {
                $this->message = json_encode(["Code" => 200, "Message" => "Data updated"]);
            } else {
                $this->message = json_encode(["Code" => 404, "Message" => "No matching record found"]);
            }
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($this->message);
        }
    }
    public function deleteEnglishSkills()
    {
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("identificacion", $this->id);
            $res->execute();
            $this->message = json_encode(["Code" => 200, "Message" => "Data delete"]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
}
?>