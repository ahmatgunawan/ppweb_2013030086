<?php
include 'koneksi.php';
if(isset($_POST['submit_add'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$sql = "INSERT INTO ta
(id,nama)
VALUES
('$id','$nama')";

if(!$conn->query($sql))
die('Tambah TA Gagal');
else
header("Location: ta.php");

}
if(isset($_POST['submit_edit'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$sql = "UPDATE mk

SET nama='$nama'
WHERE kode='$id'";

if(!$conn->query($sql))
die('Edit TA Gagal');
else
header("Location: ta.php");

}
if(isset($_POST['submit_delete'])){
$kode = $_POST['kode'];
$sql = "DELETE FROM ta
WHERE id='$id'";

if(!$conn->query($sql))
die('Hapus TA Gagal');
else
header("Location: ta.php");

}
?>