<?php


include 'header.php';

$id = $_REQUEST['product_id'];

$read = "SELECT * FROM products WHERE prod_id=$id";
$data = mysqli_query($conn, $read);
$row = mysqli_fetch_assoc($data);
?>

<div class="container mt-5">
  <div class="row">
    <div class="col">
      <div class="">
        <?php echo '<img class="rounded mx-auto d-block" src="data:image/jpeg;base64,'.base64_encode( $row['prod_img'] ).'" height="400" width="400" class="img-thumnail" />' ?>
      </div>
    </div>
    <div class="col">
      <div class="">
        <p class="h3">Rs <?php echo $row['prod_price']; ?></p>
      </div>
      <div class="">
        <p class=""><?php echo $row['prod_name']; ?></p>
      </div>
      <span class="h3">Details</span>
      <br>
      <div class="">
        <span class="h6">Condition </span>
        <span><?php echo $row['prod_condition']; ?></span>
      </div>
      <br>
      <div class="">
        <span class="h6">Type </span>
        <span><?php echo $row['prod_type']; ?></span>
      </div>
      <br>
      <div class="">
        <span class="h6">Description </span> <br>
        <span><?php echo nl2br($row['prod_description']); ?></span>

      </div>
    </div>
  </div>

</div>




<?php include 'footer.php'; ?>
