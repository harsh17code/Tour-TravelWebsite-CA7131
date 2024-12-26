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
    
    $email = $_POST["emailid"];
    

    //prepare and execute the database insertion
    $sql = "INSERT INTO `subscribe`(`email`)
     VALUES ('$email')";

     if($conn->query($sql) == TRUE){
        echo "Done";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>