	<?php 

		/*
			ASSOCIATIVE ARRAY
		*/

		$siswa = array(
			"siswa1" 	=> array("Andi","Jakarta","FTI"), 
			"siswa2" 	=> array("April","Bandung","FTI"), 
			"siswa3" 	=> array("Anto","Malang","FISIP"), 
			"siswa4" 	=> array("Sri","Depok","FIKOM"), 
			"siswa5" 	=> array("Abdul","Malang","FE") 
		);
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Domisili</th>
			<th>Fakultas</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($siswa as $siswa) : ?>
		<tr>
			<td><?php echo $i++ ?></td>
			<td><?php echo $siswa[0]; ?></td>
			<td><?php echo $siswa[1]; ?></td>
			<td><?php echo $siswa[2]; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>