<?php
  session_start();
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

    <title>Sign Up | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
        <div class="container">

      <!-- Header -->
      <?php
        if(isset($_SESSION['user_id'])){
          include("header2.php");
        }
        else{
          include("header.php");
        }
        
       ?>

               <?php

               if($_REQUEST['status']=="pass"){
                 //echo "<h2 class='text-success'>Record Added Successfully</h2>";
                 ?>

                     <div class="row">
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <h2>Account Created Successfully!</h2>
                         <strong>Successful!</strong>
                         <br />
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>
                     </div>

                 <?php
               }
               else{

                 ?>

                 <div class="row">
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <h2>Account Creation Failed!</h2>
                     <strong>Sorry</strong> Please Try Again.

                     <br />
                     <a href="sign-up.php" class="btn btn-danger" style="border:none;">Try Again</a>
                   </div>
                 </div>


                 <?php
               }

              ?>

             <!-- Footer -->
              <?php
                if(isset($_SESSION['user_id'])){
                  include("footer2.php");
                }
                else{
                  include("footer.php");
                }
                
                ?>

        </div>
    <!-- End of Main Container -->

  </body>
</html>
