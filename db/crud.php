<?php
class crud {
    private $db;
    function __construct($conn){
        $this->db= $conn;
    }
    public function insert($fname,$lname,$dob,$email,$phone,$specialty){
try {
  $sql = "INSERT INTO attendee(firstname,lastname,dateofbirth,email,phone,specialty_id) VALUES (:fname,:lname,:dob,:email,:phone,:specialty)";
  $stmt = $this->db->prepare($sql);
  $stmt ->bindparam(':fname',$fname);
  $stmt ->bindparam(':lname',$lname);
  $stmt ->bindparam(':dob',$dob);
  $stmt ->bindparam(':email',$email);
  $stmt ->bindparam(':phone',$phone);
  $stmt ->bindparam(':specialty',$specialty);
  $stmt->execute();
  return true;
} catch (PDOExeption $e) {
    //throw $th;
    echo $e->getMessage();
    return false;
}
    } 

    public function editAttendee($id,$fname,$lname,$dob,$email,$phone,$specialty){
        try {
                $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=
       :lname,`dateofbirth`=:dob,`email`=:email,
       `phone`=:phone,`specialty_id`=:specialty WHERE attendee_id = :id" ;
         $stmt = $this->db->prepare($sql);
  $stmt ->bindparam(':id',$id);
  $stmt ->bindparam(':fname',$fname);
  $stmt ->bindparam(':lname',$lname);
  $stmt ->bindparam(':dob',$dob);
  $stmt ->bindparam(':email',$email);
  $stmt ->bindparam(':phone',$phone);
  $stmt ->bindparam(':specialty',$specialty);
  $stmt->execute();
  return true;
        } catch (PDOExeption $e) {
           //throw $th;
    echo $e->getMessage();
    return false;
        }
  
    }
    public function getAttendees(){
        try {
              $sql = "SELECT * FROM `attendee` a  inner join specialities s on a.specialty_id = s.specialty_id ";
        $result = $this->db->query($sql);
        return $result;
        }
      catch (PDOExeption $e) {
    //throw $th;
    echo $e->getMessage();
    return false;
}
      
    }
   public function getAttendeeDetails($id){
        $sql="SELECT * FROM `attendee`a inner join specialities s on a.specialty_id = s.specialty_id where attendee_id = :id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $result=$stmt->fetch();
        return $result;
 }
    public function getSpecialities(){
          $sql = "SELECT * FROM `specialities` ";
        $result = $this->db->query($sql);
        return $result;
    }

    public function deleteAttendee($id){
        try {
                $sql = "DELETE from attendee where attendee_id = :id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        return true;
        } catch (PDOExeption $e) {
             echo $e->getMessage();
    return false;
        }
    }
}

?>