<?php
$title ='view records';
require_once 'includes/header.php';
require_once 'db/conn.php';

//get attendee by id 
if(!isset($_GET['id'])){
    include 'includes/errormessage.php';

}else{

    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);}

?>
<div class="card" style="width: 18rem;margin-top:20px">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['firstname'] .' '.$result['lastname']  ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php  echo $result['name'] ?></h6>
    <p class="card-text">Date of birth<?php  echo $result['dateofbirth']  ?></p>
    <p href="#" class="card-text"> Email : <?php echo $result['email'] ?></p>
    <p href="#" class="card-text">Phone Number : <?php echo $result['phone'] ?></p>
  </div>

</div>
<br>
            <a href="viewrecords.php" class="btn btn-primary">Back to List</a>
            <a href="edit.php?id=<?php echo $result['attendee_id']?>" class="btn btn-warning">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this record?');"
            href="delete.php?id=<?php echo $result['attendee_id']?>" class="btn btn-danger">Delete</a>
<br>
<?php require_once 'includes/footer.php'?>
