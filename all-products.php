<?php
include 'header.php';
 ?>
<?php
$read = "SELECT * FROM products";
$data = $conn->query($read);
?>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Type</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Condition</th>
        <th scope="col">View</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody><?php
  if ($data->num_rows > 0) {
  // output data of each row
  while($record = $data->fetch_assoc()) {?>
        <tr>
          <th scope="row"><?php echo $record['prod_id']; ?></th>
          <td><?php echo $record['prod_name']; ?></td>
          <td><?php echo $record['prod_price']; ?></td>
          <td><?php echo $record['prod_type']; ?></td>
          <td><?php echo $record['prod_description']; ?></td>
          <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $record['prod_img'] ).'" height="50" width="50" class="img-thumnail" />' ?></td>
          <td><?php echo $record['prod_condition']; ?></td>
          <td> <a href="view-product.php?product_id=<?php echo $record['prod_id']; ?>" class="btn btn-secondary" type="button" name="view">View</a> </td>
          <td> <a href="edit-product.php?product_id=<?php echo $record['prod_id']; ?>" class="btn btn-primary" type="button" name="edit">Edit</a> </td>
          <td> <a href="delete-product.php?product_id=<?php echo $record['prod_id']; ?>" class="btn btn-danger" type="button" name="delete">Delete</a> </td>
        </tr>
    <?php
  }
} else {
  echo "0 results";
}
  ?>
  </tbody>
  </table>
</div>

 <?php include 'footer.php' ?>
