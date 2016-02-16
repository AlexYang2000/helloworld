<?php
$freesize=round( disk_free_space('d:')/1024/1024/1024,2).'GB';
echo '可用空间为：'."$freesize";
echo "<br/>";
$totalsize=round(disk_total_space('d:')/1024/1024/1024,2).'GB';
echo '总的空间为：'."$totalsize";
?>