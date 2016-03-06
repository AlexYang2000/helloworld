<?php
setcookie('name','Tom',time()-1);
// setcookie('name','');
$cookie=$_COOKIE['name'];
echo "$cookie";

if (isset($cookie)){
	echo "$cookie";

}
else{
	echo "there is no cookie";
}
?>