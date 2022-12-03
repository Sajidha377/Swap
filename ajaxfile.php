<?php

//connecting the database
require("db_connection.php");

  $product_id = $_REQUEST['product_id'];

  $sql = "SELECT * FROM product where product_id='$product_id'";

  //executing the SQL command
  $rs = $mysqli->query($sql);

  while($row = mysqli_fetch_assoc($rs)){


 ?>

 <form id="SignupForm" action="edit-product.php" method="post" enctype="multipart/form-data">

   <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">

   <div class="mb-1">
     <label for="productName" class="form-label">Product Name</label>
     <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>">
   </div>

   <div class="mb-1">
     <label for="productCondition" class="form-label">Condition</label>
     <select class="form-select" name="product_condition">
       <option disabled value=""><?php echo $row['product_condition']; ?></option>
       <option value="New">New</option>
       <option value="Used">Used</option>
     </select>
   </div>

   <div class="mb-1">
     <label for="description" class="form-label">Description</label>
     <textarea class="form-control" name="description" id="description" rows="4" cols="80"><?php echo $row['description']; ?></textarea>
   </div>

   <div class="mb-1">
     <label for="category" class="form-label">Category</label>
     <select class="form-select" name="category">
       <option disabled value=""><?php echo $row['category']; ?></option>
       <option value="Electronics">Electronics</option>
       <option value="Books">Books</option>
       <option value="Furnitures">Furnitures</option>
     </select>
   </div>

   <div class="mb-1">
     <label for="productName" class="form-label">Add Image</label>
     <input type="file" class="form-control" name="picture" id="picture" value="">
     <img src="images/large/<?php echo $row['picture'];?>" alt="">
   </div>

   <button type="submit" class="btn btn-success" name="button">Save Changes</button>
 </form>

<?php
  }
?>
