<?php
namespace App\team_schedules_english;
use App\db\connect;
use App\getInstance;
class team_schedules_english extends connect
{
    private $queryPost = 'INSERT INTO team_schedules_english(id,team_name,check_in_english,check_out_english,id_journey) VALUES(:identificacion,:teamname,:checkinenglish,:checkoutenglish,:idjpurneys)';
    private $queryGetAll = 'SELECT team_schedules_english.id, journeys.name_journey AS journey_name,  
    FROM team_schedules_english 
    INNER JOIN journey ON team_schedules_english.id_journey = journey.id';
    private $queryUpdate = 'UPDATE team_schedules_english SET id = :identificacion, team_name = :teamname, check_in_english = :checkinenglish
    , check_out_english = :checkoutenglish, id_journey = :idjpurneys  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM team_schedules_english WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, public $team_name=1, public $check_in_review=1, public $check_out_review=1, private $id_journey=1)
    {
        parent::__construct();
    }
    public function postTeamScheduleEnglish()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinenglish",$this->check_in_english);
            $res->bindValue("checkoutenglish",$this->check_out_english);
            $res->bindValue("idjpurneys",$this->id_journey);
            $res->execute();
            $this->message = ["Code" => 200 + $res->rowCount(), "Message" => "inserted data"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($this->message);
        }
    }
    public function getAllTeamScheduleEnglish()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("teamname", 1);
            $res->bindValue("checkinenglish", 1);
            $res->bindValue("checkoutenglish", 1);
            $res->bindValue("idjpurneys", 1);
            $this->message = ["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($this->message);
        }
    }
    public function putTeamScheduleEnglish()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinenglish",$this->check_in_english);
            $res->bindValue("checkoutenglish",$this->check_out_english);
            $res->bindValue("idjpurneys",$this->id_journey);
            $res->execute();

            if ($res->rowCount() > 0) {
                $this->message = ["Code" => 200, "Message" => "Data updated"];
            } else {
                $this->message = ["Code" => 404, "Message" => "No matching record found"];
            }
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($this->message);
        }
    }
    public function deleteTeamScheduleEnglish()
    {
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinenglish",$this->check_in_english);
            $res->bindValue("checkoutenglish",$this->check_out_english);
            $res->bindValue("idjpurneys",$this->id_journey);
            $res->execute();
            $this->message = ["Code" => 200, "Message" => "Data delete"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($this->message);
        }
    }
}
?>