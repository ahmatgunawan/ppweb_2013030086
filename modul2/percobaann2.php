<?php
	include 'class_matematika.php';
	$math = new matematika();
	
		$jari = 10;
		$kel_lingkaran = $math->keliling_lingkaran($jari);
		$luas_lingkaran =$math->luas_lingkaran($jari);
		
	echo"menghitung keliling dan luas  lingkaran<br>";
	echo"jari-jari:".$jari."<br>";
	echo"keliling =".$kel_lingkaran."<br>";
	echo"luas =".$luas_lingkaran;
	?>