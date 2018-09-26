<?php
$fp=fopen("log.txt",'r');
$count=fread($fp,1024);
fclose($fp);
$count=$count+1;
echo "<p>Page count: ".$count."</p>";
$fp=fopen("log.txt",'w');
fwrite($fp,$count);
fclose($fp);
?>
