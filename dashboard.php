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

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">25</h5>
              <h6 class="card-subtitle mb-2 text-muted">Electronics</h6>
              <i class=" fas fa-solid fa-laptop"></i>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">30</h5>
              <h6 class="card-subtitle mb-2 text-muted">Books</h6>
              <i class="fas fa-solid fa-book"></i>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">30</h5>
              <h6 class="card-subtitle mb-2 text-muted">Books</h6>
              <i class="fas fa-solid fa-book"></i>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">50</h5>
              <h6 class="card-subtitle mb-2 text-muted">Registered Customers</h6>
              <i class="fas fa-solid fa-users"></i>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">85</h5>
              <h6 class="card-subtitle mb-2 text-muted">Total Number of Posts</h6>
              <i class="fas fa-solid fa-list"></i>
            </div>
          </div>

          <div class="card" style="width: 18rem; visibility:hidden;">
            <div class="card-body">
              <h5 class="card-title">85</h5>
              <h6 class="card-subtitle mb-2 text-muted">Total Number of Posts</h6>
              <i class="fas fa-solid fa-files"></i>
            </div>
          </div>

        </div>
        <!-- End of row 2 -->
      </div>
      <!-- End of small-container -->

    </div>
    <!-- End of main container -->

  </body>
</html>
