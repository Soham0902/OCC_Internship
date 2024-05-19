<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<?php

$db_name = 'mysql:host=localhost;dbname=project';
$user_name = 'root';
$user_password = '7709200288';

$conn = mysqli_connect("localhost" , "root" , "7709200288" , "project");

if(isset($_POST['submit'])){
   $service=$_POST['service'];
   $service = filter_var($service, FILTER_SANITIZE_STRING);
   $doctor=$_POST['doctor'];
   $doctor = filter_var($doctor, FILTER_SANITIZE_STRING); 
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['contact'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $date = filter_var($date, FILTER_SANITIZE_STRING);
   $time = $_POST['time'];
   $time = filter_var($time, FILTER_SANITIZE_STRING);
    
   $count = mysqli_query($conn , "insert into appointment values( '$service' , '$doctor','$name', '$email' , '$number' , '$date' , '$time')");
        if($count>=1) {
            echo "<script> alert('Appointment Booked successfully'); </script>";
            include("checkout.html");
        }
}        

?>


</body>
</html>