<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Form Processing</title>

		<style>
			body{
				margin: 20px 100px;
			}
			h1, p{
				margin: 0;
			}
			div{
				width: 400px;
			}

			fieldset{
				margin-top: 10px;
			}
			input[type="text"],input[type="password"],select,textarea{
				margin: 5px 10px;
			}
			input[type="checkbox"]{
				margin-left: 120px;
			}
			label{
				width: 110px;
				float: left;
			}
			label[for="html"],label[for="css"],label[for="php"]{
				float: initial;
			}

		</style>
	
	</head>
	<body>
		<div>
			<h1>Form Registrasi</h1>
			<form action="02_proses.php" method="post">
				<fieldset>
					<legend>Biodata</legend>
					
					<p>
						<label for="nama">Nama : </label>
						<input type="text" name="nama" id="nama">
					</p>
					<p>
						<label for="nim">NIM : </label>
						<input type="text" name="nim" id="nim">
					</p>
					<p>
						<label for="tgl">Tanggal Lahir : </label>
						<select name="tgl" id="tgl">
							<?php
								for ($i = 1; $i <= 31; $i++) {
									echo "<option value=$i>$i</option>";
								}
							?>
						</select>
						<select name="bln">
							<option value=1>Januari</option>
							<option value=2>Februari</option>
							<option value=3>Maret</option>
							<option value=4>April</option>
							<option value=5>Mei</option>
							<option value=6>Juni</option>
							<option value=7>Juli</option>
							<option value=8>Agustus</option>
							<option value=9>September</option>
							<option value=10>Oktober</option>
							<option value=11>November</option>
							<option value=12>Desember</option>
						</select>
						<select name="thn">
							<?php
								for ($i = 1990; $i <=2005 ; $i++) {
									echo "<option value=$i>$i</option>}
									option";
								}
							?>
						</select>
					</p>
					<p>
						<label for="alamat">Alamat</label>
						<textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
					</p>
					<p>
						<label>Jenis Kelamin : </label>
						<label for="pria"><input type="radio" name="kel" id="pria" value="pria">Pria</label>
						<label for="wanita"><input type="radio" name="kel" id="wanita" value="wanita">Wanita</label>
					</p>
				</fieldset>
				<fieldset>
					<legend align="">User Account</legend>
					<p>
						<label for="username">Username</label>
						<input type="text" name="username" id="username">
					</p>
					<p>
						<label for="email">Email</label>
						<input type="text" name="email" id="email">
					</p>
					<p>
						<label for="pass">Password</label>
						<input type="password" name="pass" id="pass">
					</p>
					<p>
						<label for="repass">Ulangi Password</label>
						<input type="password" name="repass" id="repass">
					</p>
				</fieldset>
				<fieldset>
					<legend>Resolusi Tahun Ini</legend>
					<p>
						<input type="checkbox" name="target1" value="HTML" id="html">
						<label for="html">Menguasai HTML</label>
					</p>
					<p>
						<input type="checkbox" name="target2" value="CSS" id="css">
						<label for="css">Menguasai CSS</label>
					</p>
					<p>
						<input type="checkbox" name="target3" value="PHP" id="php">
						<label for="php">Menguasai PHP</label>
					</p>
				</fieldset>
				<br>
				<p>
					<input type="submit" name="submit" value="Submit">
				</p>
			</form>
		</div>
		
	</body>
</html>