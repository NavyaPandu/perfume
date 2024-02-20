<?php
include("connect.php");
if($_SERVER['REQUEST_METHOD'])
{
$username=$_POST["username"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql="INSERT INTO users(username,phone,email,password) VALUES('$username','$phone','$email','$password')";

$result=mysqli_query($conn,$sql);

if($result){
    header("location:index.html");
}
else{
    echo"bata not insertesd".mysqli_connect_error();
}
}

?>