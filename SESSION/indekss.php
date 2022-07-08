<!DOCTYPE html>
<html>
<head>
	<meta charset "utf-8">
	<title>Form</title>
</head>
<body>
	<form name= "myform" method= "post" action= "home.php">
		Nama<Input type = "text" name= "nama" value="">
		<br>Alamat<textarea name= "alamat"></textarea>
		<br>Jenis Kelamin <select name = "jenis">
		 <option value= "L">Laki-laki</option>
		 <option value= "P">Perempuan</option>
		</select>
		<br><input type="submit" name="proses" value= "simpan">
	</form>
	<br><a href="destroy.php">destroy session</a>
</body>
</html>