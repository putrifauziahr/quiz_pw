<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>lihat mahasiswa</title>
</head>
<body>


=====SELAMAT DATANG======
<br>
<br>

<p>===LIHAT MAHASISWA===</p>
		<table border="1">
            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>NIM</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $mysqli = "SELECT * FROM mahasiswa";
                $query = mysqli_query($conn, $mysqli);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['nim'] . "</td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>




</body>
</html>