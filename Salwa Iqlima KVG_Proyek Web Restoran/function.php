<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query ($query) {
	global $conn; //agar mengacu pada $conn di atas
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) { //ibarat baju dalam lemari yang di ambil setiap loopingnya 
		$rows [] = $row; //ibarat ambil baju simpan sebelahnya.
	}

	return $rows; //kembalikan kotaknya

}


function tambah ($data) { //akan menerima inputan berupa data
	global $conn;

	$kode= htmlspecialchars($data["kode"]); //htmlspecialchars digunakan agar form tambah data tidak bisa menjalankan sintax program (jika ada penulisan sintax program)
	$gambar= htmlspecialchars($data ["gambar"]);
	$nama= htmlspecialchars($data ["nama"]);
	$harga= htmlspecialchars($data ["harga"]);

	
	$query="INSERT INTO restoran VALUES ('$kode', '$gambar', '$nama', '$harga')";


	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);

	}

function hapus ($kode) {
	global $conn;
	mysqli_query ($conn, "DELETE FROM restoran WHERE kode = $kode");

	return mysqli_affected_rows ($conn);
}


function ubah ($data) { //akan menerima inputan berupa data
	global $conn;

	$kode= htmlspecialchars($data["kode"]); //htmlspecialchars digunakan agar form tambah data tidak bisa menjalankan sintax program (jika ada penulisan sintax program)
	$gambar= htmlspecialchars($data ["gambar"]);
	$nama= htmlspecialchars($data ["nama"]);
	$harga= htmlspecialchars($data ["harga"]);

	
	$query="UPDATE restoran SET
			kode = '$kode',
			gambar = '$gambar',
			nama = '$nama',
			harga = '$harga'

		WHERE kode = $kode;
			";


	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);

	}
?>

