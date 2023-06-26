<?php
namespace App\maint_area;
use App\db\connect;
use App\getInstance;
class maint_area extends connect
{
    private $queryPost = 'INSERT INTO maint_area(id,id_area,id_staff,id_position,id_journey) VALUES(:identificacion,:idarea,:idstaff,:idposicion,:idjpurneys)';
    private $queryGetAll = 'SELECT maint_area.id, areas.name_area AS area_name, staff.id AS staff_id, position.name_position AS position_name, journey.name_journey AS journey_name
    FROM maint_area
    INNER JOIN areas ON maint_area.id_area = areas.id
    INNER JOIN staff ON maint_area.id_staff = staff.id
    INNER JOIN position ON maint_area.id_position = position.id
    INNER JOIN journey ON maint_area.id_journey = journey.id';
    private $queryUpdate = 'UPDATE maint_area SET id = :identificacion, id_area = :idarea, id_staff = :idstaff, id_position = :idposicion, id_journey = :idjpurneys  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM maint_area WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, private $id_area=1, private $id_staff=1, private $id_position=1, private $id_journey=1)
    {
        parent::__construct();
    }
    public function postMaintArea()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("idarea", $this->id_area);
            $res->bindValue("idstaff", $this->id_staff);
            $res->bindValue("idposicion", $this->id_position);
            $res->bindValue("idjpurneys", $this->id_journey);
            $res->execute();
            $this->message = json_encode(["Code" => 200 + $res->rowCount(), "Message" => "inserted data"]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function getAllMaintArea()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("idarea", 1);
            $res->bindValue("idstaff", 1);
            $res->bindValue("idposicion", 1);
            $res->bindValue("idjpurneys", 1);
            $this->message = json_encode(["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function putMaintArea()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("idarea", $this->id_area);
            $res->bindValue("idstaff", $this->id_staff);
            $res->bindValue("idposicion", $this->id_position);
            $res->bindValue("idjpurneys", $this->id_journey);
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
    public function deleteMaintArea()
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