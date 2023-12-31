<?php
namespace App\emergency_contact;
use App\db\connect;
use App\getInstance;
class emergency_contact extends connect
{
    private $queryPost = 'INSERT INTO emergency_contact(id,id_staff,cel_number,relationship,full_name,email) VALUES(:identificacion,:staff,:phone,:relation,:name,:mail)';
    private $queryGetAll = 'SELECT emergency_contact.*, staff.first_name AS staff_name 
    FROM emergency_contact 
    INNER JOIN staff ON emergency_contact.id_staff = staff.id';
    private $queryUpdate = 'UPDATE emergency_contact SET id = :identificacion, id_staff = :staff, cel_number = :phone, relationship = :relation, full_name = :name, email = :mail  WHERE id = :identificacion';
    private $queryDelete = 'DELETE FROM emergency_contact WHERE id = :identificacion';
    private $message;
    use getInstance;
    function __construct(private $id=1, private $id_staff=1, public $cel_number=1, public $relationship=1, public $full_name=1, public $email=1)
    {
        parent::__construct();
    }
    public function postEmergencyContact()
    {
        try {
            $res = $this->conx->prepare($this->queryPost);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("staff",$this->id_staff);
            $res->bindValue("phone", $this->cel_number);
            $res->bindValue("relation",$this->relationship);
            $res->bindValue("name", $this->full_name);
            $res->bindValue("mail",$this->email);
            $res->execute();
            $this->message = json_encode(["Code" => 200 + $res->rowCount(), "Message" => "inserted data"]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function getAllEmergencyContact()
    {
        try {
            $res = $this->conx->prepare($this->queryGetAll);
            $res->execute();
            $res->bindValue("identificacion", 3);
            $res->bindValue("staff", 1);
            $res->bindValue("phone", 1);
            $res->bindValue("relation",1);
            $res->bindValue("name", 1);
            $res->bindValue("mail",1);
            $this->message = json_encode(["Code" => 200, "Message" => $res->fetchAll(\PDO::FETCH_ASSOC)]);
        } catch (\PDOException $e) {
            $this->message = json_encode(["Code" => $e->getCode(), "Message" => $res->errorInfo()[2]]);
        } finally {
            print_r($this->message);
        }
    }
    public function putEmergencyContact()
    {

        try {
            $res = $this->conx->prepare($this->queryUpdate);
            $res->bindValue("identificacion", $this->id);
            $res->bindValue("staff",$this->id_staff);
            $res->bindValue("phone", $this->cel_number);
            $res->bindValue("relation",$this->relationship);
            $res->bindValue("name", $this->full_name);
            $res->bindValue("mail",$this->email);
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
    public function deleteEmergencyContact()
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