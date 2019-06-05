<?php header('location: http://gamesshop/index.php') ?>
<?php $connect = mysqli_connect('127.0.0.1','root','','bd');
$query = mysqli_query($connect,"UPDATE gamesshop SET title ='".$_POST['A']."', price ='".$_POST['B']."', img ='".$_POST['C']."' WHERE id='".$_POST['id']."'");
	 ?>