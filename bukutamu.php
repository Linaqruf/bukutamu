<html>
	<head>
		<title>Simpan Registrasi</title>
	</head>
	<body>
		<h1> Simpan Registrasi Tamu</h1>
	<?php
		$nama = $_POST["nama"];
		$nim = $_POST["nim"];
		$jurusan = $_POST["jurusan"];
		$alamat = $_POST["alamat"];
		$tahunsekarang = $_POST["tahunsekarang"];
		$tahunlahir = $_POST["tahunlahir"];
		$telepon = $_POST["telepon"];
		$komentar = $_POST["komentar"];

	$con = mysqli_connect("localhost","root","","modul5");
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
		} else {
			echo "connected";
		}

		$sqlstr="insert into bukutamu(nama, nim, jurusan, alamat, tahunsekarang, tahunlahir, telepon, komentar) values
		('$nama','$nim','$jurusan','$alamat','$tahunsekarang','$tahunlahir', $telepon,'$komentar')";

		$result = mysqli_query($con,$sqlstr);
		if($result){
			echo "<h2>Registrasi Berhasil!</h2>";
		} else {
			echo "<h2>Registrasi tidak berhasil!</h2>";
		}

		header("Location: index.php?success=done");
	?>

	</body>
</html>
