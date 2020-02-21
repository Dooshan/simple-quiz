<?php 

// $conn = mysqli_connect('localhost', 'root', '', 'quiz');

// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

$conn = new mysqli('localhost', 'root', '', 'quiz');

//Error handler 
if($conn->connect_error) {
  die("Connect failed: ". $conn->connect_error);
}

