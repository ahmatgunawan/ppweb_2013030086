<html>
<head>
<title>Membuat List Tahun</title>
</haed>

<body>
<form name="form1" method="post" action="">
		Pilih Tahun
	<select name="tahun" id="tahun">
		<?php for ($thn=1; $thn < 40; $thn++) { ?>
	<option value="<? php echo (2000+$thn); ?>"><?php echo (2000+$thn); ?> </option>
		<?php } ?>
	</select>
</form>
</body>
</html>