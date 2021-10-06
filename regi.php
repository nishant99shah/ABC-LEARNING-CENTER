<?php

  $con=mysqli_connect("projects.lithan.net","IN0719A22H","0x4UfEs8Y","in0719a22h");
  
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  if(isset($_POST['firstname']))$fname = $_POST['firstname'];
$lname= $_POST['lastname'];
$number= $_POST['number'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$password= sha1($_POST['password']);


$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$result = mysqli_query($con,"INSERT INTO regi(FirstName, LastName, MobileNumber, Gender, Email, Password) values('$fname', '$lname', '$number', '$gender', '$email', '$password')");

if($result){


}
echo '<div id="thanks" style="height: 230px; padding-top: 100px; font-size: 40px;">Thank you .....'.$fname . ' '.$lname . ' for Registrating with us.<br>A Confirmation email is sent to your email id at '.$email . '</div>';
mysqli_close ($con);
?>
