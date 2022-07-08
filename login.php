<?php 
require("adminLogin/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminLogin/style.css">
    <title>1520 AD | Admin login</title>
</head>
<body>
    <div class="container">
        <div class="myform">
            <form method="POST">
                <h2>ADMIN LOGIN</h2>
                <input type="text" placeholder="Admin Name" name="AdminName">
                <input type="password" placeholder="Password" name="AdminPassword">
                <button type="submit" name="Signin" style="cursor:pointer">LOGIN</button>
                <button type="button"><a href="main.php" style="color: white; text-decoration: none; text-transform:uppercase">Go Back</a></button>
            </form>
        </div>
        <div class="image">
            <img src="adminLogin/cafe.jpg">
        </div>
    </div>

    <?php
    // Check kro ki post variable ki help se jo bhi hum data bhej rhe usme Signin name ka variable h ya nhi
    if(isset($_POST['Signin'])){
        $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
        $result = mysqli_query($con,$query);
        // Check kitni no of rows return hui query run hone par
        if(mysqli_num_rows($result)==1){
            // Now, we will redirect it to the admin panel
            // Using session_start function we will make a session global variable 
            session_start();
            // Normaally we can't use a variable in multiple pages
            //Session variable bnna 
            $_SESSION['AdminLoginId'] = $_POST['AdminName'];
            // To redirect to a another web page we will use header function
            header("location: adminPanel.php");    
        }
        else{
            echo "<script>alert('Incorrect Password');</script>";
        }
    }
    ?>

</body>
</html>