<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Struktur Control</title>
</head>
<body>

	<?php 

		/*	
		LATIHAN:
			Latihan kali ini mirip seperti latihan 3, tapi saya ingin agar terdapat 4 kondisi:

			• Username sesuai, password sesuai: ”Username dan password sesuai, hak akses diberikan”.
			• Username sesuai, password tidak sesuai: ”Username sesuai, password tidak sesuai!”.
			• Username tidak sesuai, password sesuai: ”Username tidak sesuai, password sesuai!”.
			• Username tidak sesuai, password tidak sesuai: “Nama dan Password tidak sesuai!”.

		*/

		$username = "admin";
		$password = "qwerty";

		if ($username == "admin") {
			if ($password == "qwerty") {
				echo "Username dan password sesuai, hak akses diberikan";
			}else {
				echo "Username sesuai, password tidak sesuai!";
			}
		}elseif ($password == "qwerty") {
				echo "Username tidak sesuai, password sesuai!";
		}
		else {
				echo "Nama dan Password tidak sesuai!";
		}
		
		
	 ?>
	
</body>
</html>