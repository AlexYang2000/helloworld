<?php
$products=array(
    $array =array('Apple',18,50),
    $array =array('Pork',2,32),
    $array =array('Bisciut',3,21)
	);
for ($i=0; $i < count($products); $i++) { 
	for ($j=0; $j <count($products[$i]) ; $j++) { 
		echo $products[$i][$j].'|'; # code...
	}
	echo"<br/>";# code...
}
?>