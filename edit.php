<meta charset="utf-8">
<form action="back.php" method="POST">
	<?php  
	echo '<input name="A" value="'.$_POST['Z'].'">';
	echo '<input name="B" value="'.$_POST['X'].'">';
	echo '<input name="C" value="'.$_POST['Y'].'">';
	echo '<input name="id" value="'.$_POST['id'].'">';
	echo '<button>ok</button>';
?>
</form>