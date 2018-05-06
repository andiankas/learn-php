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
			Buatlah sebuah kode program yang terdiri dari 2 variabel: $a dan $b

		HINT:
		• $a lebih kecil dari $b
		• $a lebih besar dari $b
		• $a sama dengan $b

		*/

		$a = 5;
		$b = 10;


		if ($a<$b) {
			echo "Bilangan $a <b>lebih kecil</b> dari bilangan $b";
		}elseif ($a==$b) {
			echo "Bilangan $a <b>sama dengan</b> bilangan $b";
		}else {
			echo "Bilangan $a <b>lebih besar</b> dari bilangan $b";
		}
		
		
	 ?>
	
</body>
</html>