<?php
//将所有字符转换为HTML
$str='<strong>Tom</strong>';
echo htmlentities($str);
echo htmlspecialchars($str);
echo strip_tags($str);
?>