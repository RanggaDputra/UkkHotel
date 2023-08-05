<?php
include 'koneksi.php';

if(ISSET($_POST['submit'])){
	if($_FILES['upload']['name'] != "") {

       
        
        // mengambil data dari inputan
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $fasilitas = $_POST['fasilitas'];
        $no = $_POST['id'];
        ;

		$file = $_FILES['upload'];
		
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$name = explode('.', $file_name);
		$path = "files2/".$file_name;
		
		
        $simpenbarang = mysqli_query($con, "UPDATE tbtypekamar SET idKamar = '$no', typeKamar = '$nama', jumlahKamar = '$jumlah', gambarKamar = '$name[0]', lokasi = '$path', namaFasilitas = '$fasilitas'");
		
		move_uploaded_file($file_temp, $path);
		header("location:admin_kamar.php");
		
	}
}
?>