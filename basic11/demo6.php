<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$code=$_POST['code'];
$content=$_POST['content'];
$submit=$_POST['submit'];
$username=trim($username);
$content=htmlspecialchars($content);
if (!isset($submit)) {
	header('Location:demo5.php');
	exit(); # code...
}
if (strlen($username)<2||strlen($username)>10) {
	echo "<script>alert('username no less than 2 character or  no more than 10 character');history.back()</script>";	# code...
	exit();
}
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
	 echo "<script>alert('It is not a email');history.back()</script>";
	 exit(); # code...
}
if (strlen($password)<6) {
	echo "<script>alert('password no less than 6 character');history.back()</script>";
	exit();# code...
}
if (!strlen($code)>4 || !is_numeric($code)) {
	echo "<script>alert('code must be number and  no more than  4 character');history.back()</script>";
	exit();# code...
}
echo "Username:".$username."<br/>";
echo "Username:".$username."<br/>";
echo "Email:".$email."<br/>";
echo "Code:".$code."<br/>";
echo "Note:".$content;
?>