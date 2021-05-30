<?php
$servername = "pemacu";
$username = "syamil";
$password = "AHmad123";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//updated file: hrdf, hrdfGallery, index, event
?>