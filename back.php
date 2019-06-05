<?php header('location: http://gamesshop/index.php') ?>
<?php $connect = mysqli_connect('127.0.0.1','root','','bd');
$query = mysqli_query($connect,"UPDATE gamesshop SET title ='".$_POST['A']."', price ='".$_POST['B']."', img ='".$_FILES['C']['name']."' WHERE id='".$_POST['id']."'");
move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['c']['name']);	
	 ?>