<?php
// php标准函数 或者成为内置函数
echo(md5(123456));
// 自定义函数
function functionName(){
	echo'我是一个无参数无返回的函数';
}
functionName();
// 包含参数返回值的函数
function functionArea($radius=5){
	$area=pi()*$radius*$radius;
	return $area;
}
echo '半径为10的圆的面积为：'.functionArea(10);
echo '半径为5的圆的面积为：'.functionArea();
?>