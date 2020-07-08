<?php
include 'connection.php';
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS db_crud_opp";
if ($conn->query($sql) === TRUE) {
  echo "<br> Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
 ?>
