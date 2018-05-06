<?php 

	// protect form
	if (!isset($_POST['submit'])) {
		$pesan = urlencode("Anda belum login");
		header("Location: 03_menampilkanKesalahanForm.php?pesan=$pesan");
		die();
	}

	// ambil nilai form
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	// cek apakah username sudah diisi
	if (empty($username)) {
		$pesan = urlencode("Nama harus diisi");
		header("Location: 03_menampilkanKesalahanForm.php?pesan=$pesan");
		die();
	}

	// cek apakah username sudah diisi
	if (empty($password)) {
		$pesan = urlencode("Password harus diisi");
		header("Location: 03_menampilkanKesalahanForm.php?pesan=$pesan");
		die();
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Processing</title>
</head>
<body>

	<?php 
		echo "Username : $username"."<br>";
		echo "Password : $password"."<br>";

		if (isset($_POST['belajar'])) {
			echo "Belajar : ",$_POST['belajar']."<br>";
		}
	 ?>
	
</body>
</html>