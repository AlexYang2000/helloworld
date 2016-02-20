<?php
// 超级全局变量
$GLOBALS['a']=2;
function functionFi(){
	$GLOBALS['a']=10;
}
functionFi();
print_r($GLOBALS['a']);
echo'<br/>';
echo $GLOBALS['a'];
?>