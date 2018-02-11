<?php
$link = mysql_connect("localhost","root","") or die( "Could not connect: " . mysql_error ()); 
mysql_select_db("tim",$link);
mysql_query("SET NAMES UTF8");

$path_image = "./img/";
$path_fiel = "./file/";
?>