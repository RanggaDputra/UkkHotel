<?php
include 'koneksi.php';
$nofasilitas = $_GET['del'];
$delete = mysqli_query($con, "DELETE FROM tbfasilitas WHERE idFasilitas='$nofasilitas'");
if ($delete) {
    echo'<script type"text/javascript"> alert("Apakah Anda yakin ingin menghapus data ini?");
    document.location = "admin_fasilitas.php";
    </script>';
    
}else {
    echo "Terjadi kesalahan, gagal dihapus!";
}

?>