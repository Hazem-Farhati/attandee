<?php
$title ='Edit records';
require_once 'includes/header.php';
require_once 'db/conn.php';

$results = $crud->getSpecialities();

if(!isset($_GET['id'])){
    // echo 'error';
    include 'includes/errormessage.php';
    header('location : viewrecords.php');
}
else {
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id);


?>

<h1 class="text-center">Edit records</h1>
<form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id']?>" >
     <div class="mb-3">
    <label for="firstname"   class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" value="<?php echo $attendee['firstname']?>"  aria-describedby="firstnameHelp" name="firstname" >
  </div>
     <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" value="<?php echo $attendee['lastname']?>" aria-describedby="lastnameHelp" name="lastname" >
  </div>

     <div class="mb-3">
    <label for="dob" class="form-label">Date of birth</label>
    <input type="text" class="form-control" id="dob" value="<?php echo $attendee['dateofbirth']?>"  aria-describedby="lastnameHelp" name="dob" >
  </div>
       <div class="mb-3">
    <label for="speciality" class="form-label">Area of expertise</label>
    <select class="form-select" aria-label="Default select example" id="speciality" name="speciality">
  <?php while($r=$results->fetch(PDO::FETCH_ASSOC)){?>
    <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id'])
    echo 'selected'  ?>>
    <?php echo $r['name']; ?>
</option>
    <?php } ?>
</select>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" value="<?php echo $attendee['email']?>"  aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone" value="<?php echo $attendee['phone']?>"  aria-describedby="phoneHelp" name="phone">
    <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
  </div>


  <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
</form>
<?php }?>
<br>
<?php require_once 'includes/footer.php'?>
