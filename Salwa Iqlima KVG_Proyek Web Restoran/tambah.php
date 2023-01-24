<?php
session_start();

if (!isset($_SESSION ["login2"])){
	header("Location: login2.php");
	exit;
}

require 'function.php';
	//koneksi ke DBMS
	$conn= mysqli_connect("localhost", "root", "", "phpdasar");

	//cek apakah tombol submit sudah di save atau belum
	if (isset($_POST ["submit"])) {
	

	//cek apakah data berhasil di tambahkan atau tidak
	if (tambah ($_POST) > 0) {
		echo "
				<script>
					alert ('Data berhasil di tambahkan!');
					document.location.href = 'indeks2.php';
				</script>
			";
	}else{
		echo "
				<script>
					alert ('Data gagal di tambahkan!');
					document.location.href = 'indeks2.php';
				</script>
			";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Menu Restoran</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<h1>Tambah Data Menu Restoran</h1>

	<form action= "" method="post" > <!--action untuk mengirimkan kemana data yang di isi pada form, method POST agar datanya tidak muncul di url. Action di kosongkan karena begitu tombol submit di tekan, datanya dikirimkan ke halaman ini sendiri -->
		
		<ul>
			<li>
				<label for= "kode">Kode: </label>
				<input type="text" name="kode" id="kode" required> <!--required agar datanya tidak di isi kosong -->
			</li>
			<br>

			<li>
				<label for= "gambar">Gambar: </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<br>

			<li>
				<label for= "nama">Nama: </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<br>

			<li>
				<label for= "harga">Harga: </label>
				<input type="text" name="harga" id="harga" required>
			</li>

				<br>
				<button type="submit" name="submit">Tambah Data</button>
		</ul>
		
	</form>
	<br>
<a href="logout.php"><mark>LOGOUT</mark></a>
</body>
</html>