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
			Buatlah kode program yang akan memeriksa apakah $username berisi string ”admin” dan
			$password berisi string “qwerty”. Jika benar, tampilkan pesan: “Username dan Password sesuai,
			hak akses diberikan”. Jika salah, tampilkan pesan: “Username atau Password tidak sesuai!”.

		HINT:
			username dan password harus sesuai, jika salah satu tidak cocok, tampilkan pesan:
			“Username atau Password tidak sesuai!”

		*/

		$username = "admin";
		$password = "qwerty";

		if ($username == "admin" && $password == "qwerty") {
			echo "Username dan Password sesuai, hak akses diberikan";
		}else {
			echo "Username atau Password tidak sesuai!";
		}
		
	 ?>
	
</body>
</html>