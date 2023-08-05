<?php
    include_once "koneksi.php";
    $status = $con->query('update tbpemesanan set status='.$_GET['value'].' where noData='.$_GET['index'].';');
    header('Location: resepsionis.php');
