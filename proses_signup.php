<?php

include("config.php");

//cek apakah tombol daftar sudah diklik atau belum?
if (isset($_POST['signup'])){
	
		//ambil data dari formulir
		$nama = $_POST['nama'];
		$no_bp = $_POST['no_bp'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$departemen = $_POST['departemen'];
		
		//buat query
		$sql = "INSERT INTO anggota(nama,no_bp,jenis_kelamin,alamat,departemen) VALUE ('$nama','$no_bp','$jenis_kelamin','$alamat','$departemen')";
		$query = mysqli_query($db,$sql);
		
		//apakah query simpan berhasil?
		if ($query){
			//kalau berhasil alihkan ke halaman index.php dengan status = sukses
			header('Location: anggota.php?status=sukses');
		} else {
			//kalau gagal alihkan ke halaman indek.php dengan status = gagal
			header('Location: index.php?status=gagal');
		}
		
} else {
	die("Akses dilarang...");
}
?>