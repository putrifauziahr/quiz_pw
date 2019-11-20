<?php
include "koneksi.php";

/* PROSES LOGIN */

	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = mysqli_query($conn, "SELECT * FROM quiz_pw WHERE username = '$username' AND password = '$password'");

	if (mysqli_num_rows($login) > 0) {
		header("location: home.php");
	}else {
	echo "LOGIN GAGAL";
}
mysqli_close();

?>