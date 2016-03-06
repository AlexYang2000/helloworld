<?php
$username=$_POST['username'];
if (isset($username)&&$username==Tom) {
	setcookie('name',$username);
	header('location:demo4.php');
}
else{
	header('location:demo2.php');
}
?>