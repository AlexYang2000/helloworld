<?php
include ('library/tool.php');
$file=__FILE__;
$dirname=dirname($file);
echo($dirname);
echo __LINE__;
function  functionFff(){
	echo __FUNCTION__;
}
functionFff();
?>

