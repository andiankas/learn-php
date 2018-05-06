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
			Buatlah program yang membedakan angka ganjil dan genap.

		HINT:
		"1 adalah angka genap"
		"2 adalah angka ganjil"

		*/

		$angka = 10;

		for($i=1;$i<=10;$i++){

			if ($i % 2 == 0) {
				echo "$i adalah bilangan GENAP <br>";
			}else {
				echo "$i adalah bilangan Ganjil <br>";
			}
		}

		
		
	 ?>
	
</body>
</html>