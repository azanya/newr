<?php
$email = $_POST['email'];
$newspost = $_POST['newspost'];

$connect = mysqli_connect("localhost","root","","news");

mysqli_query($connect,"insert into postnews(email,news)values('$email','$newspost')");

echo"post news successfully";



?>