<?php
$files=$_FILES[userfile];
print_r($files);
$name=$files[name];
$tmp_name=$files[tmp_name];
echo "$tmp_name";
move_uploaded_file($tmp_name, "./uploads/".$name);
?>