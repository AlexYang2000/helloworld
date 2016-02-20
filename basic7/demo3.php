<?php
$prices=30;
$tax=0.2;
// 按引用传值
function functionPrice(&$prices,$tax){
	$prices=$prices*(1+$tax);
	return $prices;
};
echo functionPrice($prices,$tax);
echo '<br/>';
echo $prices;
echo '<br/>';
echo($tax);
?>
