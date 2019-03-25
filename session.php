<?php 
session_start();
$_SESSION['name']='Dhananjay';
echo $_SESSION['name'];
session_unset();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <style type="text/css">
 	#id1{
 		background-color: white;
 		height: 200px;
 		width: 200px;
 		border-left: 3px solid black;
 	}
 </style>
</head>
<body>
<div  id="id1"  class="container" >
	<h1>Hello</h1>
</div>
</body>
</html>