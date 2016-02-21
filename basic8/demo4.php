<?php
$str='This is a girl,she is "Lucy",\nLucky girl';
$a =addslashes($str);
echo($a);
$b=stripcslashes($a);
echo($b);
?>