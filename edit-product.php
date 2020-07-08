<?php

include 'header.php';

$id = $_REQUEST['product_id'];

$edit = "SELECT * FROM products WHERE prod_id=$id";
$data = mysqli_query($conn, $edit);
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
  $name = $_POST['prodName'];
  $price = $_POST['prodPrice'];
  $type = $_POST['prodType'];
  $description = $_POST['prodDescription'];
  $image = addslashes(file_get_contents($_FILES["prodImage"]["tmp_name"]));
  $condition = $_POST['prodCondition'];

  $update = "UPDATE products SET prod_name='$name', prod_price='$price', prod_type='$type', prod_description='$description', prod_img='$image', prod_condition='$condition' WHERE prod_id='$id'";

  // if (mysqli_query($conn, $update)) {
  //   header("location:all-products.php");
  // } else {
  //   echo "Error: ". $update ."<br>" . mysqli_error($conn);
  // }
  if ($conn->query($update) === TRUE) {
    header("location:all-products.php");
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
}


?>

<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group mt-5">
    <input type="text" class="form-control" id="prodName" name="prodName" value='<?php echo $row['prod_name']; ?>'>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="prodPrice" name="prodPrice" value="<?php echo $row['prod_price']; ?>">
  </div>
  <div class="form-group">
    <select class="form-control" id="prodType" name="prodType">
      <option>-select Type-</option>
      <option <?php if ($row['prod_type'] == 'Laptop' ) echo 'selected' ; ?> value="Laptop">Laptop</option>
      <option <?php if ($row['prod_type'] == 'Gaming PC' ) echo 'selected' ; ?> value="Gaming PC">Gaming PC</option>
      <option <?php if ($row['prod_type'] == 'Printer' ) echo 'selected' ; ?> value="Printer">Printer</option>
      <option <?php if ($row['prod_type'] == 'WIFI Router' ) echo 'selected' ; ?> value="WIFI Router">WIFI Router</option>
      <option <?php if ($row['prod_type'] == 'LCD' ) echo 'selected' ; ?> value="LCD">LCD</option>
      <option <?php if ($row['prod_type'] == 'Core i7' ) echo 'selected' ; ?> value="Core i7">Core i7</option>
      <option <?php if ($row['prod_type'] == 'Macbook' ) echo 'selected' ; ?> value="Macbook">Macbook</option>
    </select>
  </div>
  <div class="form-group">
    <textarea class="form-control" id="prodDescription" rows="5" name="prodDescription"><?php echo $row['prod_description']; ?></textarea>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="prodImage" name="prodImage" value="<?php $row['prod_img']; ?>">
    <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
  </div>
  <table>
    <tr>
      <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['prod_img'] ).'" height="200" width="200" class="img-thumnail" />' ?></td>
    </tr>
  </table>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="prodCondition" id="prodCondition" value="new" <?php if ($row['prod_condition'] == 'new' ) echo 'checked' ; ?>>
      <label class="form-check-label" for="exampleRadios1">
        NEW
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="prodCondition" id="prodCondition" value="used" <?php if ($row['prod_condition'] == 'used' ) echo 'checked' ; ?>>
      <label class="form-check-label" for="exampleRadios2">
        USED
      </label>
    </div>
  </div>
  <div class="">
    <button type="submit" name="update" id="update" class="btn btn-success btn-block mt-3">UPDATE PRODUCT</button>
  </div>
</form>
</div>
<?php


include 'footer.php';

?>
