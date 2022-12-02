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

           <div class="container md">
             <div class="row 1">
               <div class="row 2">
                 <div class="col-10 account">
                   <h2>Profile</h2>
                 </div>
                 <!--End of col-10 account-->

                  <div class="col-10 account" style="background-color:#fff;">
                  <?php
                    if(isset($_SESSION['status'])){
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                      .$_SESSION['status'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                      unset($_SESSION['status']);
                    }
                  ?>
                  </div>

               </div>
               <!-- End of row 2 -->

               <div class="row 3">
                 <div class="col-10 account" style="background-color:#f4f4f4;">

                   <div class="row 4">
                     <div class="col-2 account">
                       <ul>
                         <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Account Details</a> </li>
                         <li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Edit Account</a> </li>
                         <li> <a href="add-product1.php">Post a Product</a> </li>
                         <li> <a href="logout.php">  <i class="fas fa-sign-out-alt"></i> Log Out</a> </li>
                       </ul>
                       <!-- End of UL -->
                     </div>
                     <!-- End of col-2 account -->

                     <div class="col-8 account">

                       <div class="row 5">
                         <div class="col-3 account">
                           <img src="images/book.png" alt="">
                           <table>
                             <tbody>
                               <tr>
                                 <th>Name -</th>
                                 <td></td>
                               </tr>
                               <tr>
                                 <th>Condition -</th>
                                 <td></td>
                               </tr>
                               <tr>
                                 <th>Category -</th>
                                 <td></td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                         <div class="col-3 account">
                           <img src="images/books.png" alt="">
                           <table>
                             <tbody>
                               <tr>
                                 <th>Name -</th>
                                 <td></td>
                               </tr>
                               <tr>
                                 <th>Condition -</th>
                                 <td></td>
                               </tr>
                               <tr>
                                 <th>Category -</th>
                                 <td></td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                         <div class="col-3 account">
                           <img src="images/banner-books.png" alt="">
                           <table>
                             <tbody>
                               <tr>
                                 <th>Name -</th>
                                 <td></td>
                               </tr>
                               <tr>
                                 <th>Condition -</th>
                                 <td></td>
                               </tr>
                               <tr>
                                 <th>Category -</th>
                                 <td></td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                       </div>
                       <!-- End of row 5 -->

                     </div>
                   </div>
                   <!-- End or row 4 -->

                   <?php
                    $user_id = $_SESSION['user_id'];

                    //building the dynamic SQL command
                    $sql = "select * from user where user_id='$user_id'";

                    //executing the SQL command
                    $rs = $mysqli->query($sql);


                    if(mysqli_num_rows($rs) > 0){

                      //fetching the records
                      $row = mysqli_fetch_assoc($rs);
                   ?>


                  <!-- My Account Modal -->
                  <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Account Details</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <table>
                            <tbody>
                              <tr>
                                <th>Email -</th>
                                <td><?php echo $row['user_id']; ?></td>
                              </tr>
                              <tr>
                                <th>First Name -</th>
                                <td><?php echo $row['user_first_name']; ?></td>
                              </tr>
                              <tr>
                                <th>Last Name -</th>
                                <td><?php echo $row['user_last_name']; ?></td>
                              </tr>
                              <tr>
                                <th>Mobile Number -</th>
                                <td><?php echo $row['mobile_number']; ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of My Account modal -->

                  <!-- Edit Account Modal -->
                  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Account Details</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Form -->
                          <form id="SignupForm" action="edit-user-account.php" method="post" enctype="multipart/form-data">
                            <div class="mb-1">
                              <label for="exampleInputFirstName" class="form-label">First Name</label> <span style="color:#ff0000">*</span>
                              <input type="text" value="<?php echo $row['user_first_name']; ?>" class="form-control" id="user_first_name" name="user_first_name" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-1">
                              <label for="exampleInputSecondName" class="form-label">Last Name</label> <span style="color:#ff0000">*</span>
                              <input type="text" value="<?php echo $row['user_last_name']; ?>" class="form-control" id="user_last_name" name="user_last_name" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-1">
                              <label for="exampleInputEmail1" class="form-label">Email</label> <span style="color:#ff0000">*</span>
                              <input type="email" value="<?php echo $row['user_id']; ?>" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp" required>
                            </div>

                            <div class="mb-1">
                              <label for="exampleInputPassword1" class="form-label">New Password</label> <span style="color:#ff0000">*</span>
                              <input type="password" value="" class="form-control" id="access_code" name="access_code" required>
                            </div>
                            <div class="mb-1">
                              <label for="exampleInputMobile" class="form-label">Mobile Number</label> <span style="color:#ff0000">*</span>
                              <input type="text" value="<?php echo $row['mobile_number']; ?>" class="form-control" id="mobile_number" name="mobile_number" aria-describedby="emailHelp" required>
                            </div>
                            <button type="submit" class="btn btn-success" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Save Changes</button>
                          </form>
                          <!-- End of form -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Edit account modal -->


                  <?php
                    }
                  ?>

                 </div>
                 <!-- End of col-10 account -->

               </div>
               <!-- End of row 3 -->
             </div>
             <!-- End of row 1 -->
           </div>
           <!-- End od container md -->



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

  </body>
</html>
