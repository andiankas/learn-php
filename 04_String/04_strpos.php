<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String</title>
</head>
<body>

	<?php 
	// Function strpos() = untuk mencari posisi sebuah string atau karakter di dalam string lain. Fungsi ini cocok untuk operasi seperti ‘find and replace’. Fungsi strpos() memerlukan 3 buah argumen, dengan 1 argumen bersifat opsional.

		$kalimat = "Saya sedang belajar PHP basic. Kamu tertarik ?";
		
		$cari = "PHP";
		echo strpos($kalimat, $cari);



	 ?>
	
</body>
</html>