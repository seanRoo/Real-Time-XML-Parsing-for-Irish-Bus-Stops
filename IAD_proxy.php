<?php
session_start();

$url = $_SESSION['urlfull'];
header("Content-type: text/xml; charset=utf-8");
echo file_get_contents($url);


?>

