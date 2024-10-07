<?php
include("./header/first.php");
if($_GET['path']) {

$filepath = $_GET['path'];
$filesize = filesize($filepath);
$path_parts = pathinfo($filepath);
$filename = $path_parts['basename'];
$extension = $path_parts['extension'];

header("Pragma: public");
header("Expires: 0");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename= $filename");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize");

ob_clean();
flush();
readfile($filepath);

}
include("./header/last.php");
?>
UEFSQU1FVEVSID0gcGF0aA==
