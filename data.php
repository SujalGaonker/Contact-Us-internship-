<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="data";

$conn= new mysqli($servername,$username,$pass,$dbname);
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$sub=$_POST["sub"];
$message=$_POST["Message"];
$sql="INSERT into users (name,email,phone,sub,message) VALUES ('$name','$email','$phone','$sub','$message')";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Data enterd successfully');window.location.href='contact.html';</script>";
}
else{
    echo "<script>alert('Error entering data');window.location.href='contact.html';</script>";
}
$conn->close();
?>