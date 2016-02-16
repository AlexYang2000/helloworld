<?php
$path ='d:/doc/a.txt';
echo $path;
echo "<br/>";
echo(basename($path));
echo'<br/>';
echo(dirname($path));
echo "<br/>";
$pathinfo=pathinfo($path);
print_r($pathinfo);
extract($pathinfo);
echo "<br/>";
echo "$filename";
echo "<br/>";
echo "$extension";
echo "<br/>";
echo "$dirname";
echo "<br/>";
echo "$basename";
?>