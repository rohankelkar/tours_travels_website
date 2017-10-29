<?php
$con=mysqli_connect("localhost","root","","ihd");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['fname']);

$lastname = mysqli_real_escape_string($con, $_POST['lname']);
$Username = mysqli_real_escape_string($con, $_POST['uname']);
$cno = mysqli_real_escape_string($con, $_POST['cno']);
$star = mysqli_real_escape_string($con, $_POST['Stars']);
$exp = mysqli_real_escape_string($con, $_POST['Exp']);

$sql="INSERT INTO review (fname, lname, uname,cno,star,exp)
VALUES ('$firstname', '$lastname', '$Username','$cno','$star','$exp')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Thank You for sharing your Experiance.";

mysqli_close($con);
?>