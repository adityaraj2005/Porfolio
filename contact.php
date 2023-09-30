<?php

// MySql database
$servername="localhost";
$username="id21164068_adityaraj";
$password="AdityaRajDatabase@1";
$databasename="id21164068_aditya";

// Creating Connection
$conn= new mysqli($servername,$username,$password,$databasename);

// Checking Connection
if ($conn->connect_error)
{
    die("Connecion Faild:". $conn->connect_error);
}

//get Form Data
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//Prepare and Execute SQL query
$sql="INSERT INTO userdata (id, name, email, message) VALUES ('0','$name','$email','$message')";

if($conn->query($sql)===TRUE)
{
    echo"Data Submitted Succesfully";
}
else
{
    echo"ERROR!! Try again";
}

$conn->close();
?>