<?php

  //connect to database server
  require("db_connection.php");

  require("code_lib.inc.php");

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

    <title>Confirm Post | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
    <div class="container">

      <div class="row 1">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <img src="images/logo.png" alt="Logo">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-solid fa-plus"></i>Post
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Add Post</a></li>
                      <li><a class="dropdown-item" href="#">Update Post</a></li>
                    </ul>
                  </li>
                  <!--  -->
                  <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fas fa-solid fa-users"></i>Customers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-solid fa-user-plus"></i>Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i></i>Log Out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- End of row1 -->

      <div class="small-container">
        <div class="row 2">

          <div class="col-10 confirm">
            <h2>Confirm Post</h2>
          </div>

          <div class="col-10 confirm">
            <?php
              if(isset($_SESSION['status'])){
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:20px;">'
                .$_SESSION['status'].'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                unset($_SESSION['status']);
              }
            ?>
          </div>

          <div class="row">
            <div class="col-10 product" style="background-color:#fff;">

            </div>
          </div>


          <?php

            $keyword = 'no';

            //building the dynamic SQL command
            $sql = "select * from product where confirmation like '%$keyword%'";

            //executing the SQL command
            $rs = $mysqli->query($sql);

            while($row = mysqli_fetch_assoc($rs)){

          ?>

          <form class="form" action="confirm-post2.php" method="post" enctype="multipart/form-data">
          <div class="col-12 confirm">
            <div class="alert alert-dismissible fade show" role="alert">
              <strong><h5 id="user_id"><?php echo $row['user_id']; ?></h5></strong>
              <div class="row 3">
                <div class="col-4">
                  <img src="images/large/<?php echo $row['picture']; ?>" alt="">
                </div>

                <div class="col-8 confirm">
                    <table>
                      <tbody>
                          <tr>
                            <th>Product ID </th>
                            <th>-</th>
                          <td> <input type="text" name="product_id" value="<?php echo $row['product_id']; ?> "> </td>
                        </tr>
                        <tr>
                          <th>Product Name</th>
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
                          <td><?php echo $row['description']; ?></td>
                        </tr>
                        <tr>
                          <th>Category</th>
                          <th>-</th>
                          <td><?php echo $row['category']; ?></td>
                        </tr>
                        <tr>
                          <th>Confirm</th>
                          <th>-</th>
                          <td> <select class="form-select" name="confirmation">
                            <option value="<?php echo $row['confirmation']; ?>"><?php echo $row['confirmation']; ?></option>
                            <option value="Yes">Yes</option>
                          </select></td>
                        </tr>
                      </tbody>
                    </table>



                </div>
                <!-- End of col-8 -->
              </div>
              <!-- End of row 3 -->

              <button type="submit" class="btn btn-success" data-bs-dismiss="alert" aria-label="Close">Save</button></a>
              <a href="admin-delete-post.php?a=<?php echo $row['product_id']; ?>"><button type="button" class="btn btn-danger" data-bs-dismiss="alert" aria-label="Close">Delete</button></a>

              </form>

            </div>
          </div>
          <!-- End of col-12 -->

          <?php

           }

          ?>

        </div>
        <!-- End of row 2 -->
      </div>
      <!-- End of small-container -->

    </div>
    <!-- End of main container -->


  </body>
</html>
