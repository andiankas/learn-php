<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String</title>
</head>
<body>

	<?php 
	// Fungsi explode() digunakan untuk mengkonversi sebuah string menjadi array. Fungsi ini membutuhkan 3 argumen dengan 1 argumen opsional.


		$kalimat = "HTML,CSS,PHP,Javascript,MYSQL,JAVA,PEARL,PHYTON";

		$array_hasil = explode(",", $kalimat);

		echo '<pre>';
		print_r($array_hasil);

		echo '<br><br>'; //-----------------------------------------------------

		$sumber = "localhost/phpmannual/php/belajarphp/hello/edit";
		$array_result = explode("/", $sumber);

		echo '<pre>';
		print_r($array_result);

	 ?>
	
</body>
</html>