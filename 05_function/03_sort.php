<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>

	<?php 

		/*
			Sesuai dengan namanya, fungsi sort() bertujuan untuk mengurutkan array
		*/

		$nilai_mtk = array(60,70,72,50,45,80,82,73);
		sort($nilai_mtk);
		echo '<pre>';
		print_r($nilai_mtk);

		echo '<br><br>'; //------------------------------------------------------------------------

		$remedial_mtk = array("Zidan","Andi","Joko","Dayat","Yanuar","Suwandi");
		sort($remedial_mtk);
		echo '<pre>';
		print_r($remedial_mtk);

		echo '<br><br>'; //------------------------------------------------------------------------

		$sekolah = array("siswa12","siswa1","siswa11","siswa4","siswa3","siswa30","siswa9");
		sort($sekolah);
		echo '<pre>';
		print_r($sekolah);

		echo '<br><br>'; //------------------------------------------------------------------------

		$sekolah_terus = array("siswa12","siswa1","siswa11","siswa4","siswa3","siswa30","siswa9");
		sort($sekolah_terus, SORT_NATURAL );
		echo '<pre>';
		print_r($sekolah_terus);

	 ?>
	
</body>
</html>