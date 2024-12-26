<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "bookings";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["myname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $Message = $_POST["message"];
    

    //prepare and execute the database insertion
    $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `Message`)
     VALUES ('$name','$email','$subject','$Message')";

     if($conn->query($sql) == TRUE){
        echo "Thank You for Contacting us";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();