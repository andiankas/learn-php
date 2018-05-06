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
			Buatlah kode program yang menampilkan string nama hari: “Hari Senin”, “Hari Selasa”, sampai
			dengan “Hari Minggu”, berdasarkan variabel $hari yang bisa diisi dengan angka integer 1-7.
			Sebagai contoh, jika $hari == 1, tampilkan “Hari Senin”. Jika $hari == 5, tampilkan “Hari Jum’at”.
			Jika angka diluar 1-7 tampilkan: “Nama hari cuma ada 7!”.

		*/

		$hari = 3;

		switch ($hari) {
			case 1: echo "Hari Senin"; break;
			case 2: echo "Hari Selasa"; break;
			case 3: echo "Hari Rabu"; break;
			case 4: echo "Hari Kamis"; break;
			case 5: echo "Hari Jumat"; break;
			case 6: echo "Hari Sabtu"; break;
			case 7: echo "Hari Minggu"; break;
			
			default: "Nama hari cuma ada 7!"; break;
		}
		
		
	 ?>
	
</body>
</html>