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

    <!-- Main Container -->
        <div class="container">

          <!-- Header -->
          <?php
            include("header.php");
           ?>

           <?php

          if($_REQUEST['status']=="pass"){
            //echo "<h2 class='text-success'>Record Added Successfully</h2>";
            ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <h2>Record Added Successfully!</h2>
                  <strong>Successful</strong>
                  <br />
                  <a href="add-product1.php" class="btn btn-success">Add Another Record</a>
                </div>

            <?php
          }
          else{
            //echo "<h2 class='text-danger'>Adding New Record Failed!</h2>";
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <h2>Adding a New Record Failed!</h2>
              <strong>Sorry</strong> Please Try Again.
              <br />
              <a href="add-product1.php" class="btn btn-danger">Try Again</a>
            </div>

            <?php
          }

         ?>

             <!-- Footer -->
             <?php
               include("footer2.php");
              ?>

           </div>
           <!-- End of container -->





    <script type="text/javascript">
      function getImage(imagename)
      {
        var newimg=imagename.replace(/^.*\\/,"");
        $('#display-image').html(newimg);
      }
    </script>

  </body>
</html>
