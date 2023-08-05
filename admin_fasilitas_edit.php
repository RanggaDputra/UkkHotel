<?php
include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SELAMAT DATANG</title>
    <style>
        #warp{
            width: 800px;
            margin: auto;
            
        }
        .topmenu{
            height: 100px;
            width: 100%;
        }
        .pic{
            width: 100%;
            height: 400px;
            margin-top:50px;
        }
        .formgtl{
            width: 100%
        }
        img{
            width: 75%;
            height: 75%;
            
        }
        h1{
            font-family: Arial;
        }
        p{
            font-family: Arial;
            font-size: 12pt;
        }
        a{
            text-decoration: none;
        }
    </style>
    
</head>

<noframe>
<body>
    <div id="warp">
        <div class="topmenu">
            <table>
            <tr>
            <td width="700px"><h1>HOTEL HEBAT</h1></td>

            <td><a href="index.php">Home</a></td>
            <td><a href="kamar.php">Kamar</a></td>
            <td><a href="fasilitas.php">Fasilitas</a></td>
            
            </tr>
            </table>
    
    </div>
<div class="pic">
    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"  alt="">
</div>
<div class="formtgl">
    <?php 
    include 'koneksi.php';
$nofasilitas = $_GET['del'];
$baca = mysqli_query($con, "SELECT * FROM tbfasilitas WHERE idFasilitas='$nofasilitas'");
while ($data = mysqli_fetch_array($baca)){
?>
    <form action="admin_fasilitas_edit_aksi.php" method="POST" enctype="multipart/form-data">
    <table  >
                     <tr>
                                <td> <h1>Tambah Fasilitas</h1></td>
                                
                                </tr>
                                <tr>
                                <td> <h4>Id Fasilitas</h4></td>
                                <td><input type="text" class="validate[required]" id="date" name="id" readonly value="<?php echo $data['idFasilitas']; ?>"></td>
                                </tr>
                                <tr>
                                <td> <h4>Nama Fasilitas</h4></td>
                                <td><input type="text" class="validate[required]" id="date" name="nama" value="<?php echo $data['namaFasilitas']; ?>"></td>
                                </tr>
                                <tr>
                                <td> <h4>Keterangan</h4></td>
                                <td><input type="text" class="validate[required]" id="date" name="keterangan" value="<?php echo $data['typeKamar']; ?>"></td>
                                </tr>
                                <tr>
                                <td> <h4>Image</h4></td>
                                <td><input class="form-control" type="file" name="upload" /></td>
                                </tr>
                                
                    </tr>
<th colspan="2"><input type="submit" name="submit" value="edit" style="margin-left:50px" />

	 </table>
    </form>
    <?php 
}?>
    
</div>

    </div>
</body>
</noframe>
</html>