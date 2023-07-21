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
}

?>