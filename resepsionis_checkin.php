<?php
include 'koneksi.php';
$nofasilitas = $_GET['del'];
$delete = mysqli_query($con, "DELETE FROM tbpemesanan WHERE noData='$nofasilitas'");
if ($delete) {
    echo'<script type"text/javascript"> alert("Apakah Tamu akan Check-In?");
    document.location = "index_resepsionis.php";
    </script>';
    
}else {
    echo "Terjadi kesalahan, gagal dihapus!";
}

?>