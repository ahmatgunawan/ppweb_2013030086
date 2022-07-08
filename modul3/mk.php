<?php
include 'koneksi.php';
include "nav.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>mk</title>
</head>
<body>
<?php include 'menumk.php';?>
<table width='100%' border='1'>
<thead>
<tr>
<th width='5%'>No.</th>
<th width='5%'>Kode</th>
<th width='25%'>Nama</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM mk";
$res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
$i++;
echo "<tr>
<td>$i</td>
<td><a href='mk_detil.php?kode=".$dat['kode']."'>".

$dat["kode"]."</a></td>

<td>".$dat["nama"]."</td>

</tr>";

}
}
?>
</tbody>
</table>
</body>
</html>