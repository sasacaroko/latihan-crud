<?php
$con = mysqli_connect("localhost","root","","02240705040");
echo "Success to connect to MySQL";
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>