<?php
  require("validate-user.php");

  //connecting the database
  require("db_connection.php");
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

    <title>My Account | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
        <div class="container">

          <!-- Header -->
          <?php
            include("header2.php");
           ?>

           <div class="small-container 1">
             <div class="col-10 account">
               <h2>Profile</h2>
             </div>
           </div>
           <!-- End of small container 1 -->

           <div class="small-container 2">
             <div class="row 1">
               <div class="col-lg-4 col-md-4">
                 <?php
                   if(isset($_SESSION['status'])){
                     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                     .$_SESSION['status'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                     unset($_SESSION['status']);
                   }
                 ?>
               </div>
             </div>
           </div>
           <!-- End of container 2 -->


           <div class="small-container 3">
             <div class="row 2">

               <div class="col-lg-4 col-md-4">
                 <div class="col-2 account">
                   <ul>
                     <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Account Details</a> </li>
                     <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Edit Account</a> </li>
                     <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Change Password</a> </li>
                     <li> <a href="add-product1.php">Post a Product</a> </li>
                     <li> <a href="logout.php">  <i class="fas fa-sign-out-alt"></i> Log Out</a> </li>
                   </ul>
                   <!-- End of UL -->
                 </div>
                 <!-- End of col-2 -->
               </div>
               <!-- End of col-lg-4 -->

               <div class="col-lg-8 col-md-8" style="display:flex; flex-basis:60%; flex-wrap:wrap;>
                 <?php
                    $user_id = $_SESSION['user_id'];
                   $keyword = 'yes';

                   //building the dynamic SQL command
                   $sql = "select * from product where confirmation like '%$keyword%' and user_id='$user_id'";

                   //executing the SQL command
                   $rs = $mysqli->query($sql);

                   while($row = mysqli_fetch_assoc($rs)){

                 ?>

                   <div class="card mb-3" style="min-width: 300px; display:block;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="images/large/<?php echo $row['picture']; ?>" alt="">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <table>
                           <tbody>
                             <tr>
                               <th>Name</th>
                               <th>-</th>
                               <td><?php echo $row['product_name']; ?></td>
                             </tr>
                             <tr>
                               <th>Condition</th>
                               <th>-</th>
                               <td><?php echo $row['product_condition']; ?></td>
                             </tr>
                             <tr>
                               <th>Description</th>
                               <th>-</th>
                               <td stlye="width:100%; overflow:hidden;"><?php echo $row['description']; ?></td>
                             </tr>
                             <tr>
                               <th>Category</th>
                               <th>-</th>
                               <td><?php echo $row['category']; ?></td>
                             </tr>
                           </tbody>
                         </table>
                           <table style="width:100%;">
                             <tbody>
                               <tr style="float:right;">
                                 <th><button class="editbtn" type="button" name="button" data-id="<?php echo $row['product_id']; ?>" style="cursor:pointer;">Edit</button></th>
                               </tr>
                             </tbody>
                           </table>


                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of card mb-3 -->

                  <?php
                    }
                   ?>
               </div>


             </div>
             <!-- End of row 2 -->
           </div>
           <!-- End of container 3 -->



          <!-- Footer -->
          <?php
              include("footer2.php");
          ?>

        </div>
    <!-- End of Main Container -->

    <script>
      function myFunction(){
        var x = document.getElementById("access_code");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if(x.type === 'password'){
          x.type = "text";
          y.style.display = "block";
          z.style.display = "none";
        }
        else{
          x.type = "password";
          y.style.display = "none";
          z.style.display = "block";
        }
      }
    </script>


    <script type="text/javascript">
      $(document).ready(function(){
        $('.editbtn').click(function(){

          var errorList="";
          var product_id = $(this).data('id');
          $.ajax({
            url: 'ajaxfile.php',
            type: 'post',
            data: {product_id: product_id},
            success: function(response){
              $('.modal-body-post').html(response);
              $('#proModal').modal('show');
            }
          });
        });
      });
    </script>


  </body>
</html>
