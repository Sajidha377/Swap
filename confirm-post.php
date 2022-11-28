
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

          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <?php echo $_REQUEST['user_id']; ?>
              </div>
              <div class="card-body">

                <div class="row 3">
                  <div class="col-4">
                    <img src="images/speaker.png" alt="">
                  </div>

                  <div class="col-8">
                    <h5 class="card-title"><?php echo $_REQUEST['product_name']; ?></h5>
                    <table>
                      <tbody>
                        <tr>
                          <th>Condition -</th>
                          <td><?php echo $_REQUEST['condition']; ?></td>
                        </tr>
                        <tr>
                          <th>Category -</th>
                          <td>Electronics</td>
                        </tr>
                        <tr>
                          <th>Description -</th>
                          <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- End of row 3 -->
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </div>
            </div>
            <!-- End of card -->

            

          </div>
          <!-- End of col-12 -->

          
        </div>
        <!-- End of row 2 -->
      </div>
      <!-- End of small-container -->

    </div>
    <!-- End of main container -->

  </body>
</html>
