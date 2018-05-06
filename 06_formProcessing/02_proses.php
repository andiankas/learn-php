<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Processing</title>
</head>
<body>

	<h1>Halaman Proses</h1>

	<?php 

	echo "Nama : ".$_POST['nama']."<br>";
	echo "NIM : ".$_POST['nim']."<br>";
	echo "Tanggal Lahir : ".$_POST['tgl']."/".$_POST['bln']."/".$_POST['thn']."<br>";
	echo "Alamat : ".$_POST['alamat']."<br>";
	echo "Jenis Kelamin : ".$_POST['kel']."<br>";
	echo "Username : ".$_POST['username']."<br>";
	echo "Email : ".$_POST['email']."<br>";
	echo "Pass : ".$_POST['pass']."<br>";
	echo "Re-Pass : ".$_POST['repass']."<br>";
	echo "Resolusi program tahun ini: ".$_POST['target1'].", ".$_POST['target2'].", ".$_POST['target3']."<br>";
	

	 ?>

	<pre>
		<?php print_r($_POST); ?>
	</pre>
	
</body>
</html>