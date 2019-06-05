<?php $connect = mysqli_connect('127.0.0.1','root','','bd');
	 $query = mysqli_query($connect,'SELECT * FROM gamebasket');
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body class="bg-light">
<div>
	  <form action="clear.php" method="POST" class="my-3 ml-5">
		  	<button class="btn bg-success text-white">Купить</button>
	  </form>
<div class="row mt-5">
	<?php 
	for ($i=0; $i < $query->num_rows ; $i++) { 	 ?>
		<?php
		$game = $query->fetch_assoc();

	echo '
		<div class="col-3 ml-3"> 
			<img src="images/'.$game['img'].'" class="w-75" style="height: 400px">
			<p>'.$game['title'].'<p>
			<p>'.$game['price'].'<p>
		</div>'
				  ?>	
	  


	<?php } ?>	
</div>
	
</div>
</body>
</html>