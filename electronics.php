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

    <title>Electronics | Category | Swap</title>
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

    <!-- Container md -->
    <div class="container md">
      <div class="row">
        <div class="col-10 category">
          <div class="col-4 category">
            <h2>ELECTRONICS</h2>
          </div>
          <div class="col-4 category">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search &rarr;" aria-label="Search">
            </form>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-10 category">
            <div class="col-4 category">
              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Electronics</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-10 category">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/banner-electronics.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/banner-electronics.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/banner-electronics.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
     </div>

     <div class="row">
       <div class="col-10 category">
        <div class="col-10 category1">
          <div class="col-5 category">
            <img src="images/speaker.png" alt="">
          </div>
          <div class="col-5 category">
            <table>
              <tbody>
                <tr>
                  <td> <h5>Speaker</h5> </td>
                </tr>
                <tr>
                  <td> <p> <strong>Condition -</strong> used </p> </td>
                </tr>
                <tr>
                  <td> <p> <strong>For trade by -</strong> David </p> </td>
                </tr>
                <tr>
                  <td> <a href="" class="btn">View</a> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
       </div>
     </div>

     <div class="row">
       <div class="col-10 category">
         <nav aria-label="Page navigation example">
           <ul class="pagination justify-content-end">
             <li class="page-item disabled">
               <a class="page-link">&larr; Previous</a>
             </li>
             <li class="page-item"><a class="page-link" href="#">1</a></li>
             <li class="page-item"><a class="page-link" href="#">2</a></li>
             <li class="page-item"><a class="page-link" href="#">3</a></li>
             <li class="page-item">
               <a class="page-link" href="#">Next &rarr;</a>
             </li>
           </ul>
         </nav>
       </div>
     </div>
    </div>
    <!-- End of container md -->

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