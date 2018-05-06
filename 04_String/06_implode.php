<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String</title>
</head>
<body>

	<?php 
	// Fungsi implode() merupakan kebalikan dari fungsi implode(). Fungsi ini digunakan untuk menyatukan element array menjadi sebuah string.


		$array_book = array("html","css","php","mysql","javascript");

		$result = implode(" ", $array_book);
		echo $result;

		echo '<br><br>'; //----------------------------------------------------------------

		$buah = array("apel","jeruk","melon","pisang","durian");

		$hasil = implode("-", $buah);
		echo $hasil;

	 ?>
	
</body>
</html>