<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	mysqli_query($connect,"DELETE FROM gamebasket WHERE price > 0");
	header('Location: http://gamesshop/index.php');

 ?>