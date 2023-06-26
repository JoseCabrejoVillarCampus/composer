<?php
namespace App\team_schedule_soft_skils;
use App\db\connect;
use App\getInstance;
class team_schedule_soft_skils extends connect
{
    private $queryPost = 'INSERT INTO team_schedule_soft_skils(id,team_name,check_in_soft,check_out_soft,id_journey) VALUES(:identificacion,:teamname,:checkinsoft,:checkoutsoft,:idjpurneys)';
    private $queryGetAll = 'SELECT team_schedule_soft_skils.id, journeys.name_journey AS journey_name,  
    FROM team_schedule_soft_skils 
    INNER JOIN journey ON team_schedule_soft_skils.id_journey = journey.id';
    private $queryUpdate = 'UPDATE team_schedule_soft_skils SET id = :identificacion, team_name = :teamname, check_in_soft = :checkinsoft
    , check_out_soft = :checkoutsoft, id_journey = :idjpurneys  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM team_schedule_soft_skils WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, public $team_name=1, public $check_in_soft=1, public $check_out_soft=1, private $id_journey=1)
    {
        parent::__construct();
    }
    public function postTeamScheduleSoft()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinsoft",$this->check_in_soft);
            $res->bindValue("checkoutsoft",$this->check_out_soft);
            $res->bindValue("idjpurneys",$this->id_journey);
            $res->execute();
            $this->message = json_encode(["Code" => 200 + $res->rowCount(), "Message" => "inserted data"]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function getAllTeamScheduleSoft()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("teamname", 1);
            $res->bindValue("checkinsoft", 1);
            $res->bindValue("checkoutsoft", 1);
            $res->bindValue("idjpurneys", 1);
            $this->message = json_encode(["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function putTeamScheduleSoft()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinsoft",$this->check_in_soft);
            $res->bindValue("checkoutsoft",$this->check_out_soft);
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
    public function deleteTeamScheduleSoft()
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