<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>

	<?php 

		/*
			Fungsi count() sangat sederhana, tapi cukup sering digunakan. Fungsi ini berguna untuk
			menghitung jumlah element di dalam suatu array. 
		*/

		$zoo = array("gajah","jerapah","singa","macan","beruang");

		echo count($zoo);

		echo '<br><br>'; //------------------------------------------

		$detail = array(
			"hp" 		=>	array("xiaomi","samsung","evercoss","nokia"), //4
			"laptop" 	=> 	array("asus","acer","lenovo","macbook", "msi") //5
		);

		echo count($detail); //2
		echo '<br>';
		echo count($detail,COUNT_RECURSIVE); //11

		echo '<br><br>'; //------------------------------------------

		$buah = array("pisang","semangka","durian","anggur","apel","jeruk");

		for($i=0; $i < count($buah); $i++){
			echo $buah[$i].'<br>';
		}

	 ?>
	
</body>
</html>