<?php
    session_start();

    include('database/connection.php');
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
    <a href="Chats1.php" style="float:right; color:blue"> Back </a>
 
</head>
<body style="background-color:black; font-family: Amasis MT Pro Light;">
    <font size="+1" style="color:white;">
        Balance Nutrition [Version 1.0]
        <br>
        (c) Balance Nutrition Corporation. All rights reserved.
    </font>
    <br>
    <br>
    <style>
       input {
        border: 0px solid black;
        border-radius: 4px;
        font-family: inherit;
        font-size: 32px;
        color:white;
        background-color:black; 
        }
    </style>
            <?php

                if(isset($_POST['edit_btn']))
                {
                    $id = $_POST['edit_id'];
                    
                    $query = "SELECT users.id, users.user_name, user_bmi.message FROM users, user_bmi WHERE user_bmi.user_id = users.id && users.id = '$id'";
                    $query_run = mysqli_query($con, $query);

                    foreach($query_run as $row)
                    {
                        ?>

                            <form action="update_delete_chats1.php" method="POST">

                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <div>
                                    <font size="+3" style="color:white;">
                                      C:localhost\Users\<?php echo $row['user_name']; ?>> 
                                    </font>
                                    <input class="edit_update" type="text" name="edit_chats" value="<?php echo $row['message'] ?>" placeholder="Type Message">
                                </div>
                                <button type="submit" name="updatebtn" style="float:right;"> Send </button>

                            </form> 
                            <?php
                    }
                }
            ?>
</body>
