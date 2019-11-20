<?php
include("koneksi.php");
if (isset($_POST['tambah'])) {

  $nama = $_POST['nama'];
  $nim= $_POST['nim'];
  

  $mysqli = "INSERT INTO mahasiswa VALUES ('$nama','$nim')";

  $result = mysqli_query($conn, $mysqli) or die("ERROR");
  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
Selamat, Anda Berhasil Menambahkan Data Mahasiswa
<a href="lihat_mhs.php">Lihat Mahasiswa </a>
</body>
</html>