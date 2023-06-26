<?php
namespace App\team_schedule_software_skiils;
use App\db\connect;
use App\getInstance;
class team_schedule_software_skiils extends connect
{
    private $queryPost = 'INSERT INTO team_schedule_software_skiils(id,team_name,check_in_skills,check_out_skills,id_journey) VALUES(:identificacion,:teamname,:checkinskills,:checkoutskills,:idjpurneys)';
    private $queryGetAll = 'SELECT team_schedule_software_skiils.id, journey.name_journey AS journeys_name,  
    FROM team_schedule_software_skiils 
    INNER JOIN journeys ON team_schedule_software_skiils.id_journey = journey.id';
    private $queryUpdate = 'UPDATE team_schedule_software_skiils SET id = :identificacion, team_name = :teamname, check_in_skills = :checkinskills, check_out_skills = :checkoutskills, id_journey = :idjpurneys  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM team_schedule_software_skiils WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, public $team_name=1, public $check_in_skills=1, public $check_out_skills=1, private $id_journey=1)
    {
        parent::__construct();
    }
    public function postTeamSchedule()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->execute();
            $this->message = json_encode(["Code" => 200 + $res->rowCount(), "Message" => "inserted data"]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function getAllTeamSchedule()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("teamname", 1);
            $res->bindValue("checkinskills", 1);
            $res->bindValue("checkoutskills", 1);
            $res->bindValue("idjpurneys", 1);
            $this->message = json_encode(["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function putTeamSchedule()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinskills",$this->check_in_skills);
            $res->bindValue("checkoutskills",$this->check_out_skills);
            $res->bindValue("idjpurneys",$this->id_journey);
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
    public function deleteTeamSchedule()
    {
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinskills",$this->check_in_skills);
            $res->bindValue("checkoutskills",$this->check_out_skills);
            $res->bindValue("idjpurneys",$this->id_journey);
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