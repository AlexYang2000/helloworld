<?php
// 函数返回多条数值
// function functionInfo($name,$age,$job){
// 	$userinfo=array($name,$age,$job);
// 	return $userinfo;
// }
function functionInfo($name,$age,$job){
	$userinfo[]=$name; //数组用追加方式实现
	$userinfo[]=$age;
	$userinfo[]=$job;
	return $userinfo;
}
list($name,$age,$job)=functionInfo('Tom','19','Coder');
echo $name.'今年'.$age.'了,他是个'.$job;
?>
