<div class="container">
  <form action="insert-product.php" method="post" enctype="multipart/form-data">
  <div class="form-group mt-5">
    <input type="text" class="form-control" id="prodName" name="prodName" placeholder="Enter product Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="prodPrice" name="prodPrice" placeholder="Enter Product Price">
  </div>
  <div class="form-group">
    <select class="form-control" id="prodType" name="prodType">
      <option value="">-select Type-</option>
      <option value="Laptop">Laptop</option>
      <option value="Gaming PC">Gaming PC</option>
      <option value="Printer">Printer</option>
      <option value="WIFI Router">WIFI Router</option>
      <option value="LCD">LCD</option>
      <option value="Core i7">Core i7</option>
      <option value="Macbook">Macbook</option>
    </select>
  </div>
  <div class="form-group">
    <textarea class="form-control" id="prodDescription" rows="5" name="prodDescription" placeholder="Enter product Description"></textarea>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="prodImage" name="prodImage" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
  </div>
  <br> <br>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="prodCondition" id="prodCondition" value="New" checked>
      <label class="form-check-label" for="exampleRadios1">
        NEW
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="prodCondition" id="prodCondition" value="Used">
      <label class="form-check-label" for="exampleRadios2">
        USED
      </label>
    </div>
  </div>
  <div class="">
    <button type="submit" name="insert" id="insert" class="btn btn-success btn-block mt-3">ADD PRODUCT</button>
  </div>
</form>
</div>

<!-- <script>
 $(document).ready(function(){
      $('#insert').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script> -->
