<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>

	<?php 

		/*
			Membuat tag HTML dari Array PHP
		*/

		$link 	= array("#home","#about","#contact","#blog");
		$judul 	= array("Home","About","Contact","Blog");

		for ($i = 0; $i < count($link); $i++) {
	 ?>
	 	<a href="<?php echo $link[$i] ?>"><?php echo $judul[$i] ?></a>
	 	<br>
	<?php } ?>
</body>
</html>