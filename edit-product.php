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

    <title>Edit Product | Swap</title>
  </head>
  <body>

    <!-- Main Container -->
        <div class="container">

          <!-- Header -->
          <?php
            include("header.php");
           ?>

           <div class="container md">
             <div class="row">
               <div class="col-10 product" style="background-color:#fff;">
                 <h2>Edit Product</h2>
               </div>
             </div>
             <!-- End of row -->


               <div class="row">
                 <div class="col-11 product">
                   <div class="col-10 product">
                     <div class="col-10 product1">
                       <h6>Edit Product Details</h6>
                     </div>
                     <div class="col-10 product2">
                       <form class="row g-3" id="form1">
                         <div class="col-md-6">
                           <label for="inputProductName" class="form-label">Product Name</label>
                           <input type="text" class="form-control" id="inputEmail4">
                         </div>
                         <div class="col-md-6">
                           <label for="inputCondition" class="form-label">Condition</label> <br>
                           <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Used</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">New</label>
                          </div>
                         </div>
                         <div class="col-12">
                           <label for="inputDescription" class="form-label">Description</label>
                           <textarea class="form-control" name="description" id="description" rows="4" cols="80"></textarea>
                         </div>
                         <div class="col-12">
                           <label for="">Add Images</label>
                         </div>
                         <div class="col-md-10">
                          <div class="row">
                            <label for="picture" id=""> <i class="fa fa-plus fa-5x"></i> </label>
                            <input type="file" class="form-control" name="picture" id="picture" value="" style="visibility:hidden;" onchange="getImage(this.value);">
                            <div class="display-image">

                            </div>
                          </div>
                         </div>
                       </form>
                     </div>
                     </div>

                     <div class="col-10 product" >
                       <div class="col-10 product1">
                         <h6>Contact Details</h6>
                       </div>
                       <div class="col-10 product2">
                         <table>
                           <tbody>
                             <tr>
                               <th>Name</th>
                             </tr>
                             <tr>
                               <td>John Davis</td>
                             </tr>
                             <tr>
                               <th>Email</th>
                             </tr>
                             <tr>
                               <td>john123@gmail.com</td>
                             </tr>
                             <tr>
                               <th>Mobile Number</th>
                             </tr>
                             <tr>
                               <td>077 123 4567</td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>

                     <div class="col-10 product">
                       <div class="col-md-6 product">
                         <button type="submit" form="form1" name="button">Update Post</button>
                         <button type="reset" form="form1" name="button">Cancel</button>
                       </div>
                     </div>

                   </div>
                   <!-- End of col-11 -->

                   <button class="delete" type="submit" form="form1" name="button">Delete Post</button>
                  
                 </div>
                 <!-- End of row -->


             </div>
             <!-- End of container md -->

             <!-- Footer -->
             <?php
               include("footer.php");
              ?>

           </div>
           <!-- End of container -->





    <script type="text/javascript">
      function getImage(imagename)
      {
        var newimg=imagename.replace(/^.*\\/,"");
        $('#display-image').html(newimg);
      }
    </script>

  </body>
</html>
