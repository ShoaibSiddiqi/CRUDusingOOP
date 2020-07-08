<?php
include 'header.php';

$id = $_REQUEST['product_id'];

$delete ="DELETE FROM products WHERE prod_id=$id";

if ($conn->query($delete) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
header("location:all-products.php");
include 'footer.php';
 ?>
