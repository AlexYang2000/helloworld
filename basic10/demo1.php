<?php
echo  'Today'.date('Y-m-d H:i:s');
echo "<br/>";
echo time();
echo "<br/>";
list($a,$b)=explode(' ', microtime());
$star_time=$a+$b;
echo 'Star time'."$star_time";
echo "<br/>";
print_r(getdate());
echo "<br/>";
for ($i=0; $i < 80000000; $i++) { 
	# code...
}
list($c,$d)=explode(' ', microtime());
$end_time=$c+$d;
echo 'End time'."$end_time";
echo "<br/>";
$exec_time=$end_time-$star_time;
echo 'Exec time'."$exec_time";
echo "<br/>";
echo date('Y-m-d H:i:s',$d-3600);
?>