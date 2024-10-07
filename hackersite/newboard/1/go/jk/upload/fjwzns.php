<?php
include("./header/first.php");

echo "현재 디렉토리: "?><br><?php
echo $_SERVER["DOCUMENT_ROOT"];?><br><?php

$entrys = array();
$dirs = dir("./");
while(false !== ($entry = $dirs->read())){
    $entrys[] = $entry;
 }
 $dirs->close();

var_export($entrys);

include("./header/last.php");
?>
