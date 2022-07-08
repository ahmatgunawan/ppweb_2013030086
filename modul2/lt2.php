<html>
<head>
	<title> Menghitung Luas Lingkaran </title>
</head>
<body>
	<h2>Isi Data:</h2>
	<form action="./" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Jari-jari Lingkaran</td>
				<td></td>
				<td><input type="submit value="Hitung"></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset ($_POST['submit'])){
			$jari=$_POST['jari'];
			$phie=22/7;

			//menghitung luas lingkaran
			$luas_lingkaran=$phie*($jari*$jari);

			echo "Hasil hitung luas lingkaran sebagai berikut : </br>";
			echo "diketahui;<br/>";
			echo "Jari-Jari lingkaran=$jari<br/>";
			echo "phie=$phie<br/>";
			echo "maka luas lingkaran sama dengan [$phie x $jari x $jari] =$luas_lingkaran";

		}
	?>
</body>
</html>