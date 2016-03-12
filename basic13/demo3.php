<?php
header("Content-type:text/html;charset=utf-8");
$conf=fopen("./uploads/conf.txt", r);	
echo($conf);
echo(fread($conf, 500));
$content=file_get_contents("./uploads/conf.txt");
echo nl2br($content);
?>


