<?php
session_start();

    $db_name = 'mysql:host=localhost;dbname=project';
    $user_name = 'root';
    $user_password = '7709200288';
    
    $conn = mysqli_connect("localhost" , "root" , "7709200288" , "project");
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password= $_POST["pass"];
        $_SESSION['email'] = $email;

        $count = mysqli_query($conn , "select * from users where email='$email' && password='$password'");
        if(mysqli_num_rows($count) >=1) {
                $_SESSION["login"] = true;
                echo "<script> alert('Successful Login');</script>";
                session_abort();
                include("appointmentp.php");
            }
        }
        else{
            echo "<script> alert('Invalid credentials!');</script>";
        }

    
?>    