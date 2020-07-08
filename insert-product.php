<?php include 'header.php' ?>

<?php
include 'insert-class.php';
$name = $_POST['prodName'];
$price = $_POST['prodPrice'];
$type = $_POST['prodType'];
$description = $_POST['prodDescription'];
$image = addslashes(file_get_contents($_FILES["prodImage"]["tmp_name"]));
$condition = $_POST['prodCondition'];

$item = new insert($name, $price, $type, $description, $image, $condition);
$sql = $item-> insert_query();

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?><?php
alert("Hello World");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?><?php
header('location:index.php')
?>
<?php include 'footer.php' ?>
