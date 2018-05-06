<?php
	// pesan kesalahan form
	if (isset($_GET['pesan'])) {
		$pesan = "<p>{$_GET['pesan']}</p>";
	}else {
		$pesan = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Form Processing</title>
	</head>
	<body>
		<div>
			<h1>Halaman Form</h1>
			<!-- cetak pesan -->
			<?php echo $pesan ?>
			
			<form action="03_proses.php" method="post">
				<p>
					<label for="username">Username</label>
					<input type="text" name="username" id="username">
				</p>
				<p>
					<label for="password">Password</label>
					<input type="password" name="password" id="password">
				</p>
				<p>
					<label for="belajar"><input type="checkbox" name="belajar" id="belajar" value="php">Belajar PHP</label>
				</p>
				<p>
					<input type="submit" name="submit" value="Login">
				</p>
			</form>
		</div>
		
	</body>
</html>