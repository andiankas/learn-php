<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Processing</title>
</head>
<body>

	<h1>Pemrosesan Form</h1>
	<form action="01_proses.php" method="get">
		<p>
			<label for="nama">Nama</label><br>
			<input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
		</p>
		<p>
			<label for="password">Password</label><br>
			<input type="password" name="password" id="password" placeholder="Masukkan Password">
		</p>
		<input type="submit" name="submit" value="Proses Data">
	</form>
	
</body>
</html>