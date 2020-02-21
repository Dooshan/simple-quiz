<?php 

// $conn = mysqli_connect('localhost', 'root', '', 'quiz');

// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

$mysqli = new mysqli('localhost', 'root', '', 'quiz');

//Error handler 
if($mysqli->connect_error) {
  die("Connect failed: ". $mysqli->connect_error);
}

