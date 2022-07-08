<!DOCTYPE html>
<html>
<head>
<title>krs add</title>
</head>
<body>
<?php include 'menukrs.php';?>
<br>
<form name="myform" action="krs_proc.php" method="POST">
Id
<br><input type="text" name="id" id="id">
<br>NPM mhs
<br><input type="text" name="mhs_npm" id="mhs_npm" size="30">
<br>Kode MK
<br><input type="text" name="mk_kode" id="mk_kode" size="50">
<br>Semester
<br><input type="text" name="sem" id="sem" size="50">
<br>ID TA
<br><input type="text" name="ta_id" id="ta_id" size="50">
<br>Nilai
<br><input type="text" name="nilai" id="nilai" size="50">
<br><input type="submit" name="submit_add" id="submit_add" value="SIMPAN">
</form>
</body>
</html>