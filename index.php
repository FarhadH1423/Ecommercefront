<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farhad's Shop</title>

    <link rel="stylesheet" href="style.css"> 

    <!--Font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"/>

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.css"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" id="title">Farhad's Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">               
        <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="gents.php">Gents</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="ladies.php">Ladies</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="cosmetic.php">Cosmetic</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="grocery.php">Grocery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="others.php">Others</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="background-image">
    <!-- <div id="image-1"></div>
    <div id="image-1"></div> -->
</div>

 <div class="col-md-12">
 <h2 class="text-center">Featured Products</h2> <br>
     <div class="row">
        
     
        <div class="col-md-3">
        <h4 class="text-center">Levis jeans</h4>
        <img src="images/levis.jpg" alt="Levis jeans" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$27.99</s></p>
        <p class="price" class="text-center" >Our Price: $13.99</p>
        <form action="details-modal-LevisJeans.php"> 
        <a class="btn btn-success" href="levis.php">Details</a>

        <!-- <button  class="btn btn-success"  > <a></a>  Details</button> -->
        </form>
        </center>   
        </div>

        <div class="col-md-3">
        <h4 class="text-center">Baby Lotion</h4>
        <img src="images/p2.png" alt="Baby Lotion" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$34.99</s></p>
        <p class="price" class="text-center" >Our Price: $29.99</p>
        <a class="btn btn-success" href="babyl.php">Details</a>

        </center>   
        </div>

        <div class="col-md-3">
        <h4 class="text-center">Baby Powder</h4>
        <img src="images/p3.png" alt="Baby Powder" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$24.99</s></p>
        <p class="price" class="text-center" >Our Price: $14.99</p>
        <a class="btn btn-success" href="babyp.php">Details</a>
        </center>   
        </div>

        <div class="col-md-3">
        <h4 class="text-center">Laptop</h4>
        <img src="images/p8.jpg" alt="Laptop" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$1200.99</s></p>
        <p class="price" class="text-center" >Our Price: $1100.99</p>
        <a class="btn btn-success" href="laptop.php">Details</a>
        </center>   
        </div>

 </div>
 </div>

 <hr>
 <hr>
 <br>



 <div class="col-md-12">
     <div class="row">
        
     
        <div class="col-md-3">
        <h4 class="text-center">Brand Shirt</h4>
        <img src="images/p5.jpg" alt="Brand Shirt" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$14.99</s></p>
        <p class="price" class="text-center" >Our Price: $12.99</p>
        <!-- <form action="details-modal-LevisJeans.php">  -->
        <a class="btn btn-success" href="shirt.php">Details</a>
        <!-- </form> -->
        </center>   
        </div>

        <div class="col-md-3">
        <h4 class="text-center">Eraser</h4>
        <img src="images/p6.jpg" alt="Eraser" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$11.99</s></p>
        <p class="price" class="text-center" >Our Price: $9.99</p>
        <a class="btn btn-success" href="eraser.php">Details</a>
        </center>   
        </div>

        <div class="col-md-3">
        <h4 class="text-center">Food</h4>
        <img src="images/p7.jpg" alt="Food" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$214.99</s></p>
        <p class="price" class="text-center" >Our Price: $219.99</p>
        <a class="btn btn-success" href="food.php">Details</a>
        </center>   
        </div>

        <div class="col-md-3">
        <h4 class="text-center">Apex Shoe</h4>
        <img src="images/p9.jpg" alt="Apex Shoe" id="images">

        <center>
        <p class="list-price text-danger" class="text-center">List Price: <s>$114.99</s></p>
        <p class="price" class="text-center" >Our Price: $112.99</p>
        <a class="btn btn-success" href="shoe.php">Details</a>
        </center>   
        </div>

 </div>
 </div>






 <hr>
<footer class="text-center" id="footer"> &copy; Copyright @Farhad 2020</footer>


<?php

    include 'details-modal-LevisJeans.php';

?>


<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>