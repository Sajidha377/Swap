<?php
//connect to database server
require("db_connection.php");

require("validate-admin.php");
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

    <title>Dashboard | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
    <div class="container">

      <!-- Header -->
      <?php
       include("dashboard-header.php");
      ?>

      <div class="small-container">
        <div class="col-10 confirm">
          <h2>Dashboard</h2>
        </div>
      </div>

      <div class="small-container">

        <div class="row 1">

          <!-- Carousel -->
          <?php
           include("dashboard-carousel.php");
          ?>

          <div class="col-lg-8 col-md-8 dashboard" style="display:flex; flex-basis:60%; flex-wrap:wrap;">

            <div class="row 2">

            <?php

              $keyword = 'electronics';

              $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%'");

              $rowcount1 = mysqli_num_rows($result);

             ?>

              <div class="card" style="width: 13rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $rowcount1; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Electronics</h6>
                  <i class=" fas fa-solid fa-laptop"></i>
                </div>
              </div>
              <!-- Electronics -->

              <?php

                $keyword = 'books';

                $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%'");

                $rowcount2 = mysqli_num_rows($result);

               ?>

              <div class="card" style="width: 13rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $rowcount2; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Books</h6>
                  <i class="fas fa-solid fa-book"></i>
                </div>
              </div>
              <!-- Books -->

              <?php

                $keyword = 'furnitures';

                $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%'");

                $rowcount3 = mysqli_num_rows($result);

               ?>

              <div class="card" style="width: 13rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $rowcount3; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Furnitures</h6>
                  <i class="fas fa-solid fa-couch"></i>
                </div>
              </div>

            </div>
            <!-- End of row 2 -->

            <div class="row 3">

              <?php

                $result = $mysqli->query("SELECT * FROM user");

                $rowcount4 = mysqli_num_rows($result);

               ?>

              <div class="card" style="width: 13rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $rowcount4; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Registered Customers</h6>
                  <i class="fas fa-solid fa-users"></i>
                </div>
              </div>
              <!-- Registered customers -->

              <?php

                $result = $mysqli->query("SELECT * FROM product");

                $rowcount5 = mysqli_num_rows($result);

               ?>

              <div class="card" style="width: 13rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $rowcount5; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Total Number of Posts</h6>
                  <i class="fas fa-solid fa-list"></i>
                </div>
              </div>

              <div class="card" style="width: 13rem; visibility:hidden;">
                <div class="card-body">
                  <h5 class="card-title">85</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Total Number of Posts</h6>
                  <i class="fas fa-solid fa-files"></i>
                </div>
              </div>

            </div>
            <!-- End of row 3 -->

          </div>
          <!-- End of col-lg-8 -->

        </div>
        <!-- End of row 1 -->

      </div>
      <!-- End of small-container -->



      <div class="small-container">
          <div class="row 4">
            <?php

               $keyword = 'yes';
               $limit = 5;

              //building the dynamic SQL command
              $sql = "SELECT * FROM user INNER JOIN product ON user.user_id = product.user_id WHERE confirmation LIKE '%$keyword%' AND $limit";

              //executing the SQL command
              $rs = $mysqli->query($sql);

              while($row = mysqli_fetch_assoc($rs)){

            ?>

            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <div class="row">
                <div class="col-5 category">
                  <img src="images/large/<?php echo $row['picture']; ?>" alt="">
                </div>

                <div class="col-7 dashboard">
                  <table>
                    <tbody>
                      <tr>
                        <td> <h5><?php echo $row['product_name']; ?></h5> </td>
                      </tr>
                      <tr>
                        <th>Condition</th>
                        <th>-</th>
                        <td><?php echo $row['product_condition']; ?></td>
                      </tr>
                      <tr>
                        <th>Category</th>
                        <th>-</th>
                        <td><?php echo $row['category']; ?></td>
                      </tr>
                      <tr style="text-align:left;">
                        <th>For trade by</th>
                        <th>-</th>
                        <td><?php echo $row['user_first_name']; ?> <?php echo $row['user_last_name']; ?></td>
                      </tr>
                      <tr>
                        <td style="visibility:hidden;"><?php echo $row['user_id']; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <?php

             }

            ?>
          </div>
          <!-- End of row 4 -->
      </div>
      <!-- End of small-container -->

    </div>
    <!-- End of main container -->

  </body>
</html>
