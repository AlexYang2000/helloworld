<?php
$products=array(
    $array =array('name'=>'Apple','quantity'=>18,'price'=>50),
    $array =array('name'=>'Pork','quantity'=>2,'price'=>32),
    $array =array('name'=>'Bisciut','quantity'=>3,'price'=>21)
	);
/*for ($i=0; $i < count($products); $i++) { 
	for ($j=0; $j <count($products[$i]) ; $j++) { 
		echo $products[$i][$j].'|'; # code...
	}
	echo"<br/>";# code...
}*/
/*print_r($products);
echo "<br/>";
for ($i=0; $i < count($products); $i++) { 
	foreach ($products[$i] as $key => $value) {
		echo $key.'--'.$value.'|';
		# code...
	}
	echo'<br/>' ;# code...
};*/

for ($j=0; $j <count(reset($products)) ; $j++) { 
	while (list($key,$value)=each($products[$j])) {
		echo $key.'--'.$value.'|';
		# code...
	}
	echo "<br/>";
	# code...
}
?>