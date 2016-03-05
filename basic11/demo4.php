<?php
header('Content_type:txt/Html;charset=utf-8');
$username=$_POST['username'];
if (isset($username)) {
	echo 'success submit';# code...
} else{
	echo 'forbidden submit';
}
$username=trim($username);
$username=htmlspecialchars($username);
if (strlen($username)<3) {
	echo 'User Name  need noless than 3 letters';
	exit();
} ;
if (!is_numeric($username)) {
	echo "User name must be number";
	exit();
	# code...
}
echo "$username";
?>