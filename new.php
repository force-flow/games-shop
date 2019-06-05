<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	mysqli_query($connect,"INSERT INTO gamesshop(img,title,price) VALUES('".$_FILES['c']['name']."','".$_POST['a']."','".$_POST['b']."')");
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['c']['name']);	
	header('Location: http://gamesshop/index.php');

 ?>