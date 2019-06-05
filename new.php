<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	mysqli_query($connect,"INSERT INTO gamesshop(img,title,price) VALUES('".$_POST['c']."','".$_POST['a']."','".$_POST['b']."')");
	header('Location: http://gamesshop/index.php');

 ?>