<?php

  require("validate-user.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
      include("styles.php");
     ?>

     <style media="screen">
       <?php
       include("style.css");
       ?>
     </style>

    <title>Add Product | Swap</title>
  </head>
  <body>

    <!-- Main container -->
    <div class="container">

      <!-- Header -->
      <?php
       include("header2.php");
      ?>

      <!-- Container md -->
      <div class="container md">

        <div class="row 1">
          <div class="col-10 product" style="background-color:#fff;">
          <h2>Post a Product</h2>
          </div>
          <!-- End of col-10 product -->
        </div>
        <!-- End of row 1 -->

        <?php
          if(isset($_SESSION['status'])){
            echo $_SESSION['status'];
            unset($_SESSION['status']);
          }
        ?>

        <div class="row 2">
          <div class="col-11 product">

            <div class="col-10 product">

              <div class="col-10 product1">
                <h6>Product Details</h6>
              </div>
              <!-- End of col-10 product1 -->

              <div class="col-10 product2">
                <form class="form row g-3" action="add-product2.php" method="post" enctype="multipart/form-data" id="form1">

                  <div class="col-md-6">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name">
                  </div>
                  <!-- End of col-md-6 -->

                  <div class="col-md-6">
                  <label for="condition" class="form-label">Condition</label> <br>
                    <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="condition" id="condition" value="New">
                    <label for="new" class="form-check-label">New</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="condition" id="condition" value="Used">
                    <label for="used" class="form-check-label">Used</label>
                    </div>
                  </div>
                  <!-- End of col-md-6 -->

                  <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4" cols="80"></textarea>
                  </div>
                  <!-- End of col-12 -->

                  <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category">
                      <option selected value="electronics">Electronics</option>
                      <option value="books">Books</option>
                      <option value="furnitures">Furnitures</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label for="productName" class="form-label">Add Images</label>
                    <input type="file" class="form-control" name="picture" id="picture" value="">
                  </div>
                  <!-- End of row 3 -->

                </form>
                <!-- End of form -->
              </div>
              <!-- End of col-10 product2 -->

            </div>
            <!-- End of col-10 product -->

            <div class="col-10 product">

              <div class="col-10 product1">
                <h6>Contact Details</h6>
              </div>
              <!-- End of col-10 product1 -->

              <div class="col-10 product2">
                <table>
                  <tbody>
                    <tr>
                      <th>Name</th>
                    </tr>
                    <tr>
                      <td>John Davis</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                    </tr>
                    <tr>
                      <td>john123@gmail.com</td>
                    </tr>
                    <tr>
                      <th>Mobile Number</th>
                    </tr>
                    <tr>
                      <td>077 123 4567</td>
                    </tr>
                  </tbody>
                </table>
                <!-- End of table -->
              </div>
              <!-- End of col-10 product2 -->

            </div>
            <!-- End of col-10 product -->

            <div class="col-10 product">
              <div class="col-md-6 product">
                <input  class="postproduct form-control" type="submit" name="submit" id="submit" value="Post Product" form="form1">
                <input class="postproduct form-control" type="reset" name="cancel" value="Cancel" id="reset" form="form1">
              </div>
              <!-- End of col-md-6 -->
            </div>
            <!-- End of col-10 product -->

          </div>
          <!-- End of col-11 product -->
        </div>
        <!-- End of row 2 -->

      </div>
      <!-- End of container md -->

      <!-- Footer -->
      <?php
        include("footer2.php");
      ?>

    </div>
    <!-- End of main container -->
  </body>
</html>
