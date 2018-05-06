<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String</title>
</head>
<body>

	<?php 
	// Function trim(), ltrim(), rtrim() = untuk menghapus spasi atau karakter lain dari kedua sisi string(sisi kiri dan sisi kanan)

		// $username = "admin ";

		// if (trim($username=="admin")) {
		// 	echo 'Hallo Admin';
		// }else {
		// 	echo 'Anda bukan admin';
		// }

		$a = "__123456__";

		echo '$a 		: '.$a;
		echo '<br>';
		echo 'trim 		:'.trim($a,'_');
		echo '<br>';
		echo 'ltrim 	:'.ltrim($a,'_');
		echo '<br>';
		echo 'rtrim 	:'.rtrim($a,'_');



	 ?>
	
</body>
</html>