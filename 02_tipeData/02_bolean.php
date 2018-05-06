<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tipe Data</title>
</head>
<body>

	<?php 

		$variableBenar = true;
		$variableSalah = false;

		var_dump($variableBenar);
		echo '<br>';
		var_dump($variableSalah);
		echo '<br>';

		echo '<br><br>';

		if ($variableBenar) {
			echo 'OK. Benar!';
		}else {
			echo 'Huft. Salah!';
		}




		// NOTE: 
		// var_dump() digunakan untuk memeriksa tipe data pada variable
	 ?>
	
</body>
</html>