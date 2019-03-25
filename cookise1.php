<?php 
if (isset($_COOKIE['name'])) {
	echo "cookies set<br>";
	echo $_COOKIE['name'];

}else{
	echo "Not Set";
}
// echo "kkk";
?>