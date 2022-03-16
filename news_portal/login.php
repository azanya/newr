<?php
session_start();  //top
$connect = mysqli_connect("localhost","root","","news");
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($connect,"select * from signup where email = '$email'");
$result = mysqli_fetch_array($query);

$dbemail = $result['email'];  //database email 
$dbpassword = $result['password'];  //database password

if($dbemail==$email && $dbpassword==$password)
{
   $_SESSION['email']=$dbemail;    //session on database email 

   header("Location:dashboard.php");   
}    
else
{
      echo "Please Register Your Detail";
}      
?>