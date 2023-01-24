<?php

session_start();

if (!isset($_SESSION ["login2"])){
	header("Location: login2.php");
	exit;
}

require 'function.php';
	//ambil data di URL
	$kode = $_GET["kode"];

	//query data restoran berdasarkan kode
	$re = query ("SELECT * FROM restoran WHERE kode=$kode")[0];


	//cek apakah tombol submit sudah di save atau belum
	if (isset($_POST ["submit"])) {
	

	//cek apakah data berhasil di ubah atau tidak
	if (ubah ($_POST) > 0) {
		echo "
				<script>
					alert ('Data berhasil di ubah!');
					document.location.href = 'indeks2.php';
				</script>
			";
	}else{
		echo "
				<script>
					alert ('Data gagal di ubah!');
					document.location.href = 'indeks2.php';
				</script>
			";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Menu Restoran</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<h1>Ubah Data Menu Restoran</h1>

	<form action= "" method="post" > <!--action untuk mengirimkan kemana data yang di isi pada form, method POST agar datanya tidak muncul di url. Action di kosongkan karena begitu tombol submit di tekan, datanya dikirimkan ke halaman ini sendiri -->
		<input type="hidden" name="kode" value="<?= $re["kode"]; ?>">
		<ul>

			<li>
				<label for= "gambar">Gambar: </label>
				<input type="text" name="gambar" id="gambar" required value="<?= $re["gambar"]; ?>" > 
			</li>
			<br>

			<li>
				<label for= "nama">Nama: </label>
				<input type="text" name="nama" id="nama" required value="<?= $re["nama"]; ?>">
			</li>
			<br>

			<li>
				<label for= "harga">Harga: </label>
				<input type="text" name="harga" id="harga" required value="<?= $re["harga"]; ?>">
			</li>

				<br>
				<button type="submit" name="submit">Ubah Data</button>
		</ul>
		
	</form>
	<br>
<a href="logout.php"><mark>LOGOUT</mark></a>
</body>
</html>