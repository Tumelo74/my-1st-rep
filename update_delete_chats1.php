<?php 
include('database/connection.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $message = $_POST['edit_chats'];  
    
    $query = "UPDATE user_bmi SET message='$message' WHERE user_bmi.user_id = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        header('Location: Chats1.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: Chats1.php');
    }
}

