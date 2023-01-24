<?php

session_start();

if (!isset($_SESSION ["login2"])){
	header("Location: login2.php");
	exit;
}
require 'function.php';
query("SELECT * FROM restoran");

$res= query ("SELECT * FROM restoran");
?>

<!-- koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); 

ambil data dari tabel restoran / query data restoran
$result = mysqli_query($conn, "SELECT * FROM restoran");

ambil data (fetch) restoran dari object result
mysqli_fetch_row() // mengembalikan array numerik (array yang indeksnya angka)
mysqli_fetch_assoc() //mengembalikan array assosiatif
mysqli_fetch_array() // mengembalikan array numerik dan assosiatif (double)
mysqli_fetch_object() // menggunakan object -> nama fieldnya

//while ($resto=mysqli_fetch_assoc($result) ) { //untuk menampilkan semua data
//		var_dump($resto);
//} -->


<!DOCTYPE html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="style2.css">
</head>

<body>
	<h1>Daftar Menu Restoran</h1>

	<a href="tambah.php">Tambah Data Menu Restoran</a>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>Aksi</th>
			<th>Kode</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Harga</th>
		</tr>

		<?php foreach ($res as $row) :?> <!--untuk memanggil sejumlah field data) -->
		<tr>
			<td>
				<a href="ubah.php?kode=<?= $row ["kode"]; ?>">Ubah</a>
				<a href="hapus.php?kode=<?= $row ["kode"]; ?>" onclick="return confirm ('Yakin?');">Hapus</a>	
			</td>

			<td><?= $row ["kode"]; ?></td>
			<td> <img src="<?php echo $row ["gambar"]; ?>" width="200"> </td>
			<td><?= $row["nama"]; ?> </td>
			<td><?= $row["harga"]; ?></td>
				
		</tr>
	<?php endforeach; ?>

	</table>
</body>

