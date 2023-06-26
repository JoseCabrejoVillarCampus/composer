<?php
namespace App\optional_topics;
use App\db\connect;
use App\getInstance;
class optional_topics extends connect
{
    private $queryPost = 'INSERT INTO optional_topics(id,id_topic,id_team,id_subject,id_camper,id_team_educator) VALUES(:identificacion,:topic,:team,:subject,:camper,:teameducator)';
    private $queryGetAll = 'SELECT optional_topics.*, topics.id AS id_topic, team_schedule_software_skiils.team_name AS team_name, campers.id AS camper_id, team_educators.name_rol AS rol_name, subjects.name_subject AS subject_name 
    FROM optional_topics
    INNER JOIN topics ON optional_topics.id_topic = topics.id 
    INNER JOIN team_schedule_software_skiils ON optional_topics.id_team = team_schedule_software_skiils.id 
    INNER JOIN campers ON optional_topics.id_camper = campers.id 
    INNER JOIN team_educators ON optional_topics.id_team_educator = team_educators.id 
    INNER JOIN subjects ON optional_topics.id_subject = subjects.id';
    private $queryUpdate = 'UPDATE optional_topics SET id = :identificacion, id_topic = :topic, id_team = :team, id_subject = :subject, id_camper = :camper, id_team_educator = :teameducator  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM optional_topics WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, private $id_topic=1, private $id_team=1, private $id_subject=1, private $id_camper=1, private $id_team_educator=1)
    {
        parent::__construct();
    }
    public function postOptionalTopics()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("topic",$this->id_topic);
            $res->bindValue("team",$this->id_team);
            $res->bindValue("subject",$this->id_subject);
            $res->bindValue("camper",$this->id_camper);
            $res->bindValue("teameducator",$this->id_team_educator);
            $res->execute();
            $this->message = ["Code" => 200 + $res->rowCount(), "Message" => "inserted data"];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($this->message);
        }
    }
    public function getAllOptionalTopics()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("topic", 1);
            $res->bindValue("team", 1);
            $res->bindValue("subject", 1);
            $res->bindValue("camper", 1);
            $res->bindValue("teameducator", 1);
            $this->message = ["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)];
        } catch (\PDOException $e) {
            $this->message = ["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]];
        } finally {
            print_r($this->message);
        }
    }
    public function putOptionalTopics()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("topic",$this->id_topic);
            $res->bindValue("team",$this->id_team);
            $res->bindValue("subject",$this->id_subject);
            $res->bindValue("camper",$this->id_camper);
            $res->bindValue("teameducator",$this->id_team_educator);
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
    public function deleteOptionalTopics()
    {
        try {
            $res = $this->conx->prepare($this->queryDelete);
            $res->bindValue("identificacion", $this->id);
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