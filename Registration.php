<?php
session_start();

    include("database/connection.php");
    include("include/functions.php");	

    $user_data = check_login($con);

    $id = $user_data['id'];

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was posted
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        //$gender = $_POST['gender'];
        //$DOB = $_POST['DOB'];
        
        if(!empty($weight) && !empty($height))
        {   
        
            
            //Saving to the database
            $bmi = bmi($weight, $height);

            header("Location: BMI/bmi.php");

            if($bmi < 18.5)
            {
                header("Location: BMI/bmi_underweight.php");
            }
            else
            {
                if($bmi < 24.9)
                {
                    header("Location: BMI/bmi_normal.php");
                }
                else
                {
                    if($bmi < 29.9)
                    {
                        header("Location: BMI/bmi_overweight.php");
                    }
                    else
                    {
                        header("Location: BMI/bmi_obese.php");
                    }
                }
            }

            $query = "UPDATE users u, user_bmi ub 
                      SET u.weight='$weight', u.height='$height', u.gender='$gender', u.DOB='$DOB', ub.bmi='$bmi' 
                      WHERE ub.user_id=u.id AND u.id='$id'";

            mysqli_query($con, $query);
            
            "<script>alert('You have registered successfully')</script>";
            die;
        }
        else
        {
            echo "Please Enter a valid information!!";
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----Title---->
    <title>Balance Nutrition</title>
    <!----External Css---->
    <link rel="stylesheet" href="assets/css/styleF.css">
    <link rel="stylesheet" href="assets/css/sytleSignup.css">
    <link rel="icon" href="./images/logo.jpg">
    
    <div class="topnav">
        <a class="active" href="Home.php">Home</a>
        <a href="authorisation/Login.php">Login</a>
        <a href="authorisation/Sign Up.php">Sign up</a>
        <a href="About Us.php">About Us</a>
        <a href="authorisation/logout.php" style="float:right;">Logout</a>
    </div>  
</head>

<style>

    input::placeholder{
        font-size: 20px;
         color: grey;
    }
    table td {
    border: 1px solid grey;
    padding: 4px 8px;
    }
</style>    
    
    <body> 
    <div>
    <center><h2 class="title"><font size="+5" style="font-family: Baskerville Old Face"><u>Register for Body Mass Index(BMI)</u></font></h2></center>
    <br>
    <br>  
    <form method="post" id="reg-form" class="form-container">
           
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <tbody>
                    <tr >
                        <td>
                            <br>
                            <font size="+2">
                                Current Weight:
                            </font>
                        </td>
                        <td>
                            <input type="text" placeholder="Weight(Kg)" style="height:40px;" size="60" name="weight" min="10" max="725.747792" required>
                        </td>
                    </tr>
                    <tr >
                        <td>
                            <br>
                            <font size="+2">
                                Height:
                            </font>
                        </td>
                        <td>
                            <input type="text" name="height" placeholder="Height(Meters)" style="height:40px;" size="60" min="0.1" max="10" required>
                        </td>
                    </tr>
                <!--<tr>
                    <td>
                        <br>
                        <font size="+2">
                            Gender:
                        </font>
                    </td>
                        <td>
                            <input type="text" name="gender" placeholder="Gender" style="height:40px;" size="60" required>
                        </td>
                    <td required>
                        <input type="radio" name="genderMaleBtn" value="Male" id="btn-male">Male
                        <input type="radio" name="genderFemaleBtn" value="Female" id="btn-female">Female
                    </td>
                </tr>
                <tr >
                    <td>
                        <br>
                        <font size="+2">
                            Date of Birth:
                        </font>
                    </td>
                    <td>
                        <input style="font-size: 2rem" type="date" name="DOB" required>
                    </td>
                </tr>-->
                <tr>
                    <td>
                        <br>
                        <input type="submit" onclick="checkingUserName()" value="Submit" style="background-color: #4CAF50; font-size: 25;">
                    </td>
                    <td>
                        <br>
                        <input type="reset" value="Reset" style="background-color: #f44336; font-size: 25; float:right">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <br>
    <table class="status" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th><u><font size="+2">BMI</font></u></th>
            <th><u><font size="+2">Weight Status</font></u></th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><font size="+2">Below 18.5</font></td>
                <td><font size="+2">Underweight</font></td>
            </tr>
            <tr>
                <td><font size="+2">18.5—24.9</font></td>
                <td><font size="+2">Healthy</font></td>
            </tr> 
            <tr>
                <td><font size="+2">25.0—29.9</font></td>
                <td><font size="+2">Overweight</font></td>
            </tr>
            <tr>
                <td><font size="+2">30.0 and Above</font></td>
                <td><font size="+2">Obese</font></td>
            </tr> 
        </tbody>
      </table>
          <br>
        <center>
            <font size="+2">
                <a href="Chats1.php" style="color:blue">Chat area</a>
            </font>
        </center>
    </div>
    </body>
    
    <footer>
         <?php include('include/Footer.php'); ?> 
    </footer>
    <script>
        function checkingUserName() {
            alert('You have registered successfully😊');
        }
    </script>
</html>