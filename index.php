<?php
  session_start();

  //connect to database server
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

    <title>Home | Swap</title>

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

<!-- Banner -->
     <div class="small-container">
       <div class="row">
         <div class="col-6 index">
           <h1>SWAP</h1>
           <h3>products at your own ease </h3>
           <h5>Do you have a surplus of unused products? Don’t be bothered, find your customer and swap it here.</h5>
         </div>

         <div class="col-6 index">
           <img src="images/banner1.png" alt="banner">
         </div>
       </div>
     </div>
<!-- End of Banner -->

<!-- Description -->
    <div class="small-container">
      <div class="row">
        <div class="col-3 index">
          <h5>EXCHANGE YOUR PRODUCTS</h5>
          <p>Exchange your unused products for items that would be of more useful to you.</p>
        </div>
        <div class="col-3 index">
          <h5>RECYCLE</h5>
          <p>Be a part of making a greener future.</p>
        </div>
        <div class="col-3 index">
          <h5>SAVE MONEY</h5>
          <p>Completely cut off product cost. Get products without spending money.</p>
        </div>
      </div>
    </div>
<!-- End of Description -->

<!-- Tabs -->
    <div class="small-container">
      <div class="row">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"> <a href="#"><i class=" fas fa-solid fa-laptop"></i> <br> Electronics</a> </button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <a href="#"><i class="fas fa-solid fa-book"></i> <br>  Books</a> </button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <a href="#"><i class="fas fa-solid fa-couch"></i> <br> Furnitures</a> </button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="row">
              <div class="col-4 index">
                <img src="images/electronics.png" alt="">
              </div>
              <div class="col-8 index">
                <!-- Electronics -->
                <?php

                  $keyword = 'electronics';
                  $keyword1 = 'Yes';

                  $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%' AND confirmation LIKE '%$keyword1%'");

                  $rowcount1 = mysqli_num_rows($result);

                 ?>
                <p><?php echo $rowcount1; ?> posts</p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                <a href="electronics.php">View More  &rarr;</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="row">
              <div class="col-4 index">
                <img src="images/books.png" alt="">
              </div>
              <div class="col-8 index">
                <!-- Books -->
                <?php

                  $keyword = 'books';
                  $keyword1 = 'Yes';

                  $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%' AND confirmation LIKE '%$keyword1%'");

                  $rowcount2 = mysqli_num_rows($result);

                 ?>
                <p><?php echo $rowcount2; ?> Posts</p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                <a href="books.php">View More  &rarr;</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="row">
              <div class="col-4 index">
                <img src="images/furnitures.png" alt="">
              </div>
              <div class="col-8 index">
                <!-- Furnitures -->
                <?php

                  $keyword = 'furnitures';
                  $keyword1 = 'Yes';

                  $result = $mysqli->query("SELECT * FROM product WHERE category LIKE '%$keyword%' AND confirmation LIKE '%$keyword1%'");

                  $rowcount3 = mysqli_num_rows($result);

                 ?>
                <p><?php echo $rowcount3; ?> posts</p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                <a href="furnitures.php">View More  &rarr;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End of tabs -->

<!-- About Swap -->
    <div class="small-container">
      <div class="row">
        <div class="col-5 index">
          <h5>About Us</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-4 index">
          <img src="images/about_us.png" alt="">
        </div>
      </div>
    </div>
<!-- End of About Swap -->

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
<!-- End of Container -->


  </body>
</html>
