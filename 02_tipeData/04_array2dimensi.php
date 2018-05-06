<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tipe Data</title>
</head>
<body>

	<?php 

		$country = array(
			array("Indonesia","Jakarta"),
			array("Malaysia","Kuala Lumpur"),
			array("Philipina","Manila"),
			array("Thailand","Bangkok"),
			array("Italy","Roma"),
			array("Inggris","London")
		);

		echo "Ibukota negara ".$country[3][0]." adalah ".$country[3][1]; //Ibukota negara Thailand adalah Bangkok

		// NOTE: 
		
	 ?>
	
</body>
</html>