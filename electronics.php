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

    <title>Electronics | Category | Swap</title>
  </head>
  <body>

<!-- Main Container -->
    <div class="container">

      <!-- Header -->
      <?php
        include("header.php");
       ?>

       <div class="container-md">
          <div class="row">
            <div class="col-10">
              <div class="col-5" style="align-items:center; justify-content:center;">
                <h2>ELECTRONICS</h2>
              </div>
              <div class="col-5">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
              </div>
            </div>
          </div>
       </div>


       <!-- Footer -->
       <?php
         include("footer.php");
        ?>

    </div>
<!-- End of Main Container -->

  </body>
</html>
