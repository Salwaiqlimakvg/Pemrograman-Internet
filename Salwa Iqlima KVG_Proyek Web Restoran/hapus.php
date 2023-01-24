<?php
session_start();

if (!isset($_SESSION ["login2"])){
	header("Location: login2.php");
	exit;
}

require 'function.php';

$kode = $_GET["kode"];

if (hapus($kode) > 0) {
	echo "
				<script>
					alert ('Data berhasil di hapus!');
					document.location.href = 'indeks2.php';
				</script>
			";
	}else{
		echo "
				<script>
					alert ('Data gagal di hapus');
					document.location.href = 'indeks2.php';
				</script>
			";
		}

?>