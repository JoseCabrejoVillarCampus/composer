<?php
namespace App\team_schedules_review;
use App\db\connect;
use App\getInstance;
class team_schedules_review extends connect
{
    private $queryPost = 'INSERT INTO team_schedules_review(id,team_name,check_in_review,check_out_review,id_journey) VALUES(:identificacion,:teamname,:checkinreview,:checkoutreview,:idjpurneys)';
    private $queryGetAll = 'SELECT team_schedules_review.*, journey.name_journey AS name_journey  
    FROM team_schedules_review 
    INNER JOIN journey ON team_schedules_review.id_journey = journey.id';
    private $queryUpdate = 'UPDATE team_schedules_review SET id = :identificacion, team_name = :teamname, check_in_review = :checkinreview, check_out_review = :checkoutreview, id_journey = :idjpurneys  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM team_schedules_review WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, public $team_name=1, public $check_in_review=1, public $check_out_review=1, private $id_journey=1)
    {
        parent::__construct();
    }
    public function postTeamScheduleReview()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinreview",$this->check_in_review);
            $res->bindValue("checkoutreview",$this->check_out_review);
            $res->bindValue("idjpurneys",$this->id_journey);
            $res->execute();
            $this->message = json_encode(["Code" => 200 + $res->rowCount(), "Message" => "inserted data"]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function getAllTeamScheduleReview()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("teamname", 1);
            $res->bindValue("checkinreview", 1);
            $res->bindValue("checkoutreview", 1);
            $res->bindValue("idjpurneys", 1);
            $this->message = json_encode(["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function putTeamScheduleReview()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("teamname",$this->team_name);
            $res->bindValue("checkinreview",$this->check_in_review);
            $res->bindValue("checkoutreview",$this->check_out_review);
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
    public function deleteTeamScheduleReview()
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