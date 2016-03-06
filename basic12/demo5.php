<?php
session_start();
$_SESSION['name1']="Tom";
$_SESSION['name2']="Jerry";
if (isset($_SESSION['name1'])) {
	echo $_SESSION['name1'];
	echo $_SESSION['name2'];
}
?>