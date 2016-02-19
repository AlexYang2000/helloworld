<?php
$products=array('apple'=>10,'milk'=>12,'pear'=>6);
extract($products);
echo $pear;
echo $apple;
echo $milk;
print_r($products);
array_unshift($products, '3');
array_push($products, '8');
array_shift($products);
print_r($products);
array_pop($products);
print_r($products);
$i=array_rand($products,3);
echo($i[0]);
echo($i[1]);
?>