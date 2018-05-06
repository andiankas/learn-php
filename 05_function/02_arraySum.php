<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>

	<?php 

		/*
			Fungsi array_sum() digunakan untuk menghitung jumlah total dari seluruh element array.
			Fungsi ini cocok jika anda ingin membuat aplikasi matematis atau statistik. 
		*/

		$n = array(80,50);
		echo array_sum($n);

		echo '<br><br>'; //-----------------------------------------------------------

		$nilai_uas = array(80,75,72,65,90);
		echo array_sum($nilai_uas);

		echo '<br><br>'; //-----------------------------------------------------------

		$kelas_ipa2 = array(
			"Andi" 				=>	70, 
			"April" 			=>	80, 
			"Anton" 			=>	65, 
			"Yuli" 				=>	90, 
			"Sri" 				=>	95, 
			"Lia" 				=>	72, 
			"Agus" 				=>	62, 
			"Budi" 				=>	72, 
			"Dayat" 			=>	65, 
			"Agung" 			=>	62 
		);

		$nilai_rata2 = array_sum($kelas_ipa2) / count($kelas_ipa2);
		echo "Nilai rata-rate kelas ipa 2 mata pelajaran kimia : ".$nilai_rata2;

	 ?>
	
</body>
</html>