<?php
include 'koneksi.php';
include "nav.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>krs</title>
</head>
<body>
<?php include 'menukrs.php';?>
<table width='100%' border='1'>
<thead>
<tr>
<th width='5%'>No.</th>
<th width='15%'>Id</th>
<th width='25%'>NPM mhs</th>
<th width='15%'>Kode MK</th>
<th width='15%'>Semester</th>
<th width='15%'>ID TA</th>
<th width='15%'>Nilai</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM krs";
$res = $conn->query($sql);
if($res->num_rows > 0){
$i = 0;
while($dat = $res->fetch_assoc()){
$i++;
echo "<tr>
<td>$i</td>
<td><a href='krs_detil.php?id=".$dat['id']."'>".

$dat["id"]."</a></td>
<td>".$dat["mhs_npm"]."</td>
<td>".$dat["mk_kode"]."</td>
<td>".$dat["sem"]."</td>
<td>".$dat["ta_id"]."</td>
<td>".$dat["nilai"]."</td>
</tr>";

}
}
?>
</tbody>
</table>
</body>
</html>