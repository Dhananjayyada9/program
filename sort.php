<?php 
$fir = $_POST["first"];
$sec = $_POST["second"];           
$thr =  $_POST["third"];        
$for = $_POST["forth"]; 
$fiv = $_POST["five"]; 
$arr = array ("$fir","$sec","$thr","$for","$fiv");
sort($arr);
$arrlength = count($arr);
for ($i=0; $i <$arrlength ; $i++) { 
	echo "$arr[$i]";
	echo "<br>";
}

?>