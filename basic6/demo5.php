<?php
// 获取文件的时间戳
$file='../demo1.php';
echo(fileatime($file));
echo'<br/>';
date_default_timezone_set('Asia/Shanghai');
echo'访问时间：'.(date(('y-m-d H:i:s'),fileatime($file)));
echo'<br/>';
echo'拥有着修改时间：'.(date(('y-m-d H:i:s'),filectime($file)));
echo'<br/>';
echo'修改时间:'.(date(('y-m-d H:i:s'),filemtime($file)));
?>