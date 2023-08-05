<?php 
// koneksi database
include 'koneksi.php';

// mengambil data barang dengan kode paling besar
$query = mysqli_query($con, "SELECT max(noData) as kodeTerbesar FROM tbpemesanan");
$data = mysqli_fetch_array($query);
$no = $data['kodeTerbesar'];
 
$no++;

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$tamu = $_POST['tamu'];
$kamar = $_POST['kamar'];
$tglcekin = $_POST['tglcekin'];
$tglcekout = $_POST['tglcekout'];
$status = $_POST['status'];
// menginput data ke database
mysqli_query($con,"insert into tbpemesanan values('$no','$no','$nama','$tglcekin','$tglcekout','$hp','$tamu','$kamar','$email','$status')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>