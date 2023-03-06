<?php
session_start();

    include("database/connection.php");
    include("include/functions.php");

    $user_data = check_login($con);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----Title---->
    <title>Balance Nutrition</title>
    <!----External Css---->
    <link rel="icon" href="./images/logo.jpg">
    <a href="Registration.php" style="float:right; color:blue">Back</a>
  
</head>
      
      <?php
        if(isset($_SESSION['status']) != '')
        {
            echo '<h2>'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
            
        if(isset($_SESSION['status']) && $_SESSION['status'] != '')
        {
            echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
            unset($_SESSION ['status']);
        }

      ?>
<body style="background-color:black; font-family: Amasis MT Pro Light;">
    <?php
      $server_name = "localhost";
      $db_username = "root";
      $db_password = "";
      $db_name = "nutrition_db";
      $id = $user_data['id'];    
      
      $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
        
      $query = "SELECT users.id, users.user_name, user_bmi.message FROM users, user_bmi WHERE user_bmi.user_id = users.id && users.id = '$id'";
      $query_run = mysqli_query($connection, $query);
    ?>
        
    
    <font size="+1" style="color:white;">
        Balance Nutrition [Version 1.0]
        <br>
        (c) Balance Nutrition Corporation. All rights reserved.
    </font>
    <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
        ?> 
    
        <br>
        <br>
        <font size="+3" style="color:white;">
		  C:localhost\Users\<?php echo $row['user_name']; ?>> <?php echo $row['message']; ?>
        </font>
    
        <form action="edit_chats1.php" method="post">
            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
            <button type="submit" name="edit_btn" style="float:right;"> Reply</button>
        </form>
        <?php
            }
        }
        else
        {
            echo "No Record Found";     
        }
        ?>  
</body>
