<?php $connect = mysqli_connect('127.0.0.1','root','','bd');
	 $query = mysqli_query($connect,'SELECT * FROM gamesshop')
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body class="bg-light">

	<form action="new.php" method="POST" class="text-center" enctype="multipart/form-data">
		<h2>Добавить игру</h2>
		<input type="text"placeholder="Название" name="a">
		<input type="text"placeholder="Цена" name="b">
		<input type="file"placeholder="Картинка" name="c">
		<button class="text-white bg-success btn">Добавить</button>
	</form>
	<form action="offer.php" class="text-center">
		<button class="text-white bg-success btn">Корзина</button>
	</form>
	<div class="col-12  row">
	<?php 
	for ($i=0; $i < $query->num_rows ; $i++) { 	 ?>
		<?php
		$game = $query->fetch_assoc();

	echo '<div class="col-3 my-3 text-center"> 
			<img src="images/'.$game['img'].'" class="w-100" style="height: 600px">
			<h3  class="text-black">'.$game['title'].'</h3>
			<h3  class="text-black">'.$game['price'].'</h3>
		'
				  ?>
			<form method="POST" action="buy.php">
			<?php echo' <input type="hidden" name="id" value="'.$game['id'].'">
						<input type="hidden" name="A" value="'.$game['title'].'">
						<input type="hidden" name="B" value="'.$game['price'].'">
						<input type="hidden" name="C" value="'.$game['img'].'">'?>

			<button class="text-white btn bg-success my-1">В корзину</button>
			</form>	

			<form method="POST" action="del.php">
			<?php echo' <input type="hidden" name="id" value="'.$game['id'].'">'?>
			<button class="text-white btn bg-success my-1">Удалить</button>
			</form>			

			<form method="POST" action="edit.php">

			<?php echo'
			<input type="hidden" name="id" value="'.$game['id'].'">
			<input type="hidden" name="Z" value="'.$game['title'].'">
			<input type="hidden" name="X" value="'.$game['price'].'">
			<input type="hidden" name="Y" value="'.$game['img'].'">'?>
			<button class="text-white btn bg-success my-1">Изменить</button>
			</form>		
</div>

	<?php } ?>	
</div>
</div>
</body>
</html>