<?php
include 'koneksi.php';

if(ISSET($_POST['submit'])){
	if($_FILES['upload']['name'] != "") {

       
        
        $nama = $_POST['nama'];
        $no = $_POST['id'];
        $keterangan = $_POST['keterangan'];

		$file = $_FILES['upload'];
		
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$name = explode('.', $file_name);
		$path = "files/".$file_name;
		
		
        $simpenbarang = mysqli_query($con, "UPDATE tbfasilitas SET idFasilitas = '$no', namaFasilitas = '$nama', typeKamar = '$keterangan', imgfasilitas = '$name[0]', locatio = '$path'");
		
		move_uploaded_file($file_temp, $path);
		header("location:admin_fasilitas.php");
		
	}
}
?>