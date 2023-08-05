<?php 
// koneksi database
include 'koneksi.php';

if(ISSET($_POST['submit'])){
	if($_FILES['upload']['name'] != "") {

		// mengambil data dengan kode paling besar
        $query = mysqli_query($con, "SELECT max(idFasilitas) as kodeTerbesar FROM tbfasilitas");
        $data = mysqli_fetch_array($query);
        $no = $data['kodeTerbesar'];
 
        $no++;
        
		// mengambil data dari inputan
        $nama = $_POST['nama'];
        $keterangan = $_POST['keterangan'];

		// mengambil data foto dari inputan ya cok
		$file = $_FILES['upload'];
		
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$name = explode('.', $file_name);
		$path = "files/".$file_name;
		
		// kode di bawah iko untuk masukkan datanyo ke database
		mysqli_query($con,"insert into tbfasilitas values('$no','$nama','$keterangan','$name[0]','$path')");
		
		move_uploaded_file($file_temp, $path);
		header("location:admin_fasilitas.php");
		
	}
}
// // mengambil data barang dengan kode paling besar
// $query = mysqli_query($con, "SELECT max(idFasilitas) as kodeTerbesar FROM tbfasilitas");
// $data = mysqli_fetch_array($query);
// $no = $data['kodeTerbesar'];
 
// $no++;

// // menangkap data yang di kirim dari form
// $nama = $_POST['nama'];
// $keterangan = $_POST['keterangan'];
// $file = $_POST['upload'];

// $file_name = $file['name'];
// $file_temp = $file['tmp_name'];
// $name = explode('.', $file_name);
// $path = "files/".$file_name;

// // menginput data ke database
// mysqli_query($con,"insert into tbfasilitas values('$no','$nama','$keterangan','$name','$path')");

// // mengalihkan halaman kembali ke index.php
// move_uploaded_file($file_temp, $path);
// header("location:admin_fasilitas.php");

?>