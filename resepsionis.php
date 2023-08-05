<?php
    include_once "koneksi.php";
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
        /* img{
            width: 50%;
            height: 50%;
            
        } */
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
<body>
    <!-- Bagian Navigasi ############################################################# -->
        <div id="warp">
        <div class="topmenu">
            <table>
            <tr>
            <td width="300px"><h1>HOTEL HEBAT</h1></td>
            <td width="300px"><h1>RESEPSIONIS</h1></td>
            <!-- <td><a href="index_kamar.php">Kamar</a></td>
            <td width="150px" align="center"><a href="admin_kamar.php" >Fasilitas Kamar</a></td>
            <td><a href="admin_fasilitas.php">Fasilitas</a></td> -->
            <td><a href="login.php">Logout</a></td>
            
            </tr>
            </table>
    
    </div>




    <!-- Bagian Filter ############################################################# -->
    <div class="pic">
    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="75%" width="75%" alt="">
    <div style="display: grid; grid: 30px / auto auto; margin-top: 50px; width: 75%; margin-left:auto; margin-right:auto">
        <div style="">
            <input id="filterTanggal" type="date"/>
            <button onclick="filterTanggal()" style="color: #232323; background-color: #55ff99; border-radius: 10px">Cari</button>
        </div>
        <div style="text-align:right">
            <input id="filterNama" type="text"/>
            <button onclick="filterNama()" style="color: #232323; background-color: #55ff99; border-radius: 10px">Cari</button>
        </div>
    </div>
    </div>
    <!-- ................................................................................... -->




    <!-- Bagian Table ############################################################# -->
    <div style="margin-top: 5px; width: 100%; margin-left:auto; margin-right:auto">
        <table style="width: 100%; text-align: center;">
            <tr>
                <td style="background-color: #22dd99">Nama Tamu</td>
                <td style="background-color: #22dd99">Tanggal Check In</td>
                <td style="background-color: #22dd99">Tanggal Check Out</td>
                <td style="background-color: #22dd99">Aksi</td>
            </tr>
            <?php
                $data = "";
                if(isset($_GET['filterTanggal'])) {
                    if($_GET['filterTanggal']!="")
                        $data = $con->query('select * from tbpemesanan where tglCheckin >= "'.$_GET['filterTanggal'].'";');
                    else
                        $data = $con->query('select * from tbpemesanan;');
                } else if(isset($_GET['filterNama'])) {
                    if($_GET['filterNama']!="")
                        $data = $con->query('select * from tbpemesanan where namaPemesan like "%'.$_GET['filterNama'].'%";');
                    else
                        $data = $con->query('select * from tbpemesanan;');
                } else
                    $data = $con->query('select * from tbpemesanan;');
                foreach ($data as $value) {
                    echo '
                        <tr>
                            <td style="background-color: #22dd99">'.$value['namaPemesan'].'</td>
                            <td style="background-color: #22dd99">'.$value['tglCheckin'].'</td>
                            <td style="background-color: #22dd99">'.$value['tglCheckout'].'</td>
                            <td style="background-color: #22dd99"><button onclick="aksi('.$value['noData'].', '.$value['status'].')">'.$value['status'].'</button></td>
                        </tr>
                    ';
                }
            ?>
        </table>
    </div>
    <!-- ................................................................................... -->




    <!-- Bagian Script ############################################################# -->
    <script>
        function filterTanggal()
        {
            window.open("resepsionis.php?filterTanggal="+document.getElementById('filterTanggal').value, "_self");
        }
        function filterNama()
        {
            window.open("resepsionis.php?filterNama="+document.getElementById('filterNama').value, "_self");
        }
        function aksi(index, value)
        {
            val = 0;
            if(value=="1")
                val = 0
            else
                val = 1
            window.open("aksi.php?index="+index+"&value="+val, "_self");
        }
    </script>
</body>
</html>