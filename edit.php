<?php

include 'rec_con.php';

$edt_id = $_GET['ed_id'];
$rs = $obj->query("select * from stu_form where id='$edt_id'");
$row = $rs->fetch_object();

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$enrollment = $_POST['enrollment'];
	$course = $_POST['course'];
	$gender = $_POST['gender'];

	$query = $obj->query("update stu_form SET name='$name',email='$email',contact='$contact',enrollment='$enrollment',course='$course',gender='$gender' where id='$edt_id'");
	if($query){
		echo "record updated......";
		header("location:index.php");
	}
	else{
		echo"error....";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="contact">Contact:</label>
      <input type="number" class="form-control" id="contact" placeholder="Enter your contact" name="contact">
    </div>
    <div class="mb-3 mt-3">
      <label for="enrollment">Enrollment No.:</label>
      <input type="number" class="form-control" id="enrollment" placeholder="Enter your enrollment" name="enrollment">
    </div>
    <div class="mb-3 mt-3">
      <label for="course">Course:</label>
      <input type="course" class="form-control" id="course" placeholder="Enter Your course" name="course">
    </div>
    <div class="mb-3 mt-3">
      <label class="d-block">Gender:</label>
      <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="female" name="gender" value="Female">
        <label class="form-check-label" for="female">Female</label>
      </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
