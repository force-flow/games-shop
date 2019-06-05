<meta charset="utf-8">
<form action="back.php" method="POST" enctype="multipart/form-data">
	<?php  
	echo '<input name="A" value="'.$_POST['Z'].'">';
	echo '<input name="B" value="'.$_POST['X'].'">';
	echo '<input type="file" name="C">';
	echo '<input name="id" value="'.$_POST['id'].'">';
	echo '<button>ok</button>';
?>
</form>