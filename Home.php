<?php
session_start();

    include("database/connection.php");
    include("include/functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html> 
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/styleH.css">
    <link rel="stylesheet" href="assets/css/styleF.css">
    <link rel="icon" href="../images/logo.jpg">

   <!-- custom js file link  -->
   <script src="assets/js/script.js" defer></script>
    
    <div class="topnav">
       <a class="active" href="Home.php">Home</a>
       <a href="authorisation/Login.php">Login</a>
       <a href="authorisation/Sign Up.php">Sign up</a>
       <a href="About Us.php">About Us</a>
       <a href="authorisation/logout.php">Logout</a>
       <a style="float:right;" >Welcome <?php echo $user_data['user_name'];?>😊😀</a>
    </div>
</head>
<body>
    <a><img style="float:right;" width ="100px" height="100px" src="./images/logo.jpg" alt="logo"></a>
    <br>
    <br>
        <ul>
            <center><h1 class="title"><font size="+5" style="font-family: Baskerville Old Face">Balance Nutrition</font></h1><p id="slogan"><font size="+0.1" style="font-family: Agency FB">Eat healthy and have a happy healthy life.</font></p></center>
    </ul>
<div class="container">
        <br>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <h3>Breakfast</h3>
         <br>
         <img src="images/1.jpg" alt="">
      </div>

      <div class="product" data-name="p-2">
         <h3>Lunch</h3>
         <img src="images/2.jpg" alt="">
      </div>

      <div class="product" data-name="p-3">
         <h3>Supper</h3>
         <img src="images/3.png" alt="">
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img width ="100%" height="0%" src="images/1.jpg" alt="">
      <h3>Balance Breakfast</h3>
       <font size="+1" style="text-align: justify;">
        <div><span><b>Eggs:</b> protein nutrients</span></div>
        <div><b>Whole wheat toast:</b> fiber</div>
        <div><b>Fruits:</b> vitamins, minerals, and antioxidants</div>
        <div><b>Oatmeal:</b> beta glucan, iron, manganese, zincm, magnesium, B vitamins</div>
        <!--<div><span><b>Green tea:</b> caffeine, reduced risk of chronic disease, antioxidant(EGCG), better brain health.</span></div>--->
       </font>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <div class="buttons">
         <a href="Home.php" class="buy">Close</a> 
      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="images/2.jpg" alt="">
      <h3>Lunch</h3>
       <font size="+1" style="text-align: justify;">
        <div><b>Cheese:</b> Calcium, Fat, Protein, Vitamins A.</div>
        <!--<div><b>Lettuce:</b>  Vitamin A can reduce a person's risk of cataracts.</div>-->
        <!--<div><b>Cucumber:</b>  Vitamins A, Vitamins K, fiber Nutrition.</div>-->  
        <div><b>Tomatoes:</b>Vitamin C, Potassium, Folate, and Vitamin K Nutrition.</div> 
        <div><b>Bread:</b> Fiber, Protein Nutrition.</div>
        <div><b>Juice:</b> Vitamins and Minerals Nutrition.</div>
         <div><b>Apples:</b> Fiber and Antioxidants Nutrition.</div>
       </font>
        <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
        </div>
      <div class="buttons">
         <a href="Home.php" class="buy">Close</a>
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="images/3.png" alt="">
      <h3>Balance Dinner</h3>
        <font size="+1" style="text-align: justify;">
        <div><b>Fish:</b> Omega-3, Vitamins D and B2, Calcium, Phosphorus, Minerals, Iron.</div> 
        <div><b>Cabbage:</b> Vitamins C and K Nutrition.</div>
        <div><b>Potatoes:</b> Fiber, Antioxidants, Vitamins.</div>
        <div><b>Corn:</b> Vitamin C, Antioxidant, Carotenoids lutein and Zeaxanthin.</div>
       </font>
        <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <div class="buttons">
         <a href="Home.php" class="buy">Close</a>
      </div>
   </div>
</div>
 <font size="+1">    
<center><a style="color: blue;" href="Registration.php">Click here to register</a></center>
</font>    
</body>
    
<footer>
    <?php include('include/Footer.php'); ?> 
</footer>
</html>