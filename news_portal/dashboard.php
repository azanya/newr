<?php
session_start();
$connect = mysqli_connect("localhost","root","","news");

$query = mysqli_query($connect,"select * from signup where email = '".$_SESSION['email']."'");                           
$result = mysqli_fetch_array($query);

?>

<h2>Login as - <?php echo $result['username']; ?></h2>

<form action="postnews.php" method="POST">
<input type="hidden" name ="email" value="<?php echo $result['email']; ?>"><br><br>
 <textarea name="newspost"></textarea><br><br>
 <input type="submit" value="Post Your News">
</form>