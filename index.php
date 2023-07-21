<?php
$title ='Index';
require_once 'includes/header.php';
require_once 'db/conn.php'

?>

<h1 class="text-center">Regestration for IT Conference</h1>
<form method="post" action="success.php">
     <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname" >
  </div>
     <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" name="lastname" >
  </div>

     <div class="mb-3">
    <label for="dob" class="form-label">Date of birth</label>
    <input type="text" class="form-control" id="dob" aria-describedby="lastnameHelp" name="dob" >
  </div>
       <div class="mb-3">
    <label for="speciality" class="form-label">Area of expertise</label>
    <select class="form-select" aria-label="Default select example" id="speciality" name="speciality">
  <option selected value="1">Database admin</option>
  <option value="3">Software developer</option>
  <option value="5">Web administration</option>
  <option value="other">other</option>
</select>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
    <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<?php require_once 'includes/footer.php'?>
