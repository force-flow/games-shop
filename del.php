<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	mysqli_query($connect,"DELETE FROM gamesshop WHERE id = ".$_POST['id']);
	header('Location: http://gamesshop/index.php');

 ?>