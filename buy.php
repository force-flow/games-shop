<?php $connect = mysqli_connect('127.0.0.1','root','','bd');
	 mysqli_query($connect,"INSERT INTO gamebasket(img,title,price) VALUES('".$_POST['C']."','".$_POST['A']."','".$_POST['B']."')");
	 	header('Location: http://gamesshop/index.php');
	 ?>
