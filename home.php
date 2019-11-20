<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>


=====SELAMAT DATANG======
<br>
<br>

<p> ===TAMBAH MAHASISWA=== </p>
<form action="tambah_mhs.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"  name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="password" name="nim" placeholder="nim">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">
                    Tambah
                </button>

</form>
</body>
</html>