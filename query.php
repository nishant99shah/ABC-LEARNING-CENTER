<?php

$con = $con=mysqli_connect("projects.lithan.net","IN0719A22H","0x4UfEs8Y","in0719a22h");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  if(isset($_POST['firstname']))$fname = $_POST['firstname'];
$lname= $_POST['lastname'];
$email=$_POST['email'];
$subject=$_POST['subject'];

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

$result = mysqli_query($con,"INSERT INTO inquery(FirstName, LastName, Email, Subject) values ('$fname', '$lname', '$email', '$subject')");

if($result){


}
mysqli_close ($con);
?>
