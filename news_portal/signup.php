<?php
$username = $_POST['username'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];

$connect = mysqli_connect("localhost","root","","news");

mysqli_query($connect,"insert into signup(username,contact,email,password)values('$username','$contact','$email','$password')");

echo "Register Successfully";

?>