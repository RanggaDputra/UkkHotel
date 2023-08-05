<?php
include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        #warp {
            width: 800px;
            margin: auto;

        }

        .topmenu {
            height: 100px;
            width: 100%;
        }

        .pic {
            width: 100%;
            height: 400px;
            margin-left: 100px;
        }

        .formgtl {
            width: 100%;
            position: relative;
            padding-right: 30px;
            margin: 5px;
        }

        img {
            width: 75%;
            height: 75%;

        }

        .tentang {
            width: 100%;
            text-align: center;
        }

        h1 {
            font-family: Arial;
        }

        p {
            font-family: Arial;
            font-size: 12pt;
        }

        a {
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
                        <td width="800px">
                            <h1>HOTEL HEBAT</h1>
                        </td>

                        <td><a href="index.php" style="margin-left:50px">Home</a></td>
                        <td><a href="kamar.php" style="margin-left:50px">Kamar</a></td>
                        <td><a href="fasilitas.php" style="margin-left:50px">Fasilitas</a></td>
                        <td><a href="login.php" style="margin-left:50px">Login</a></td>

                    </tr>
                </table>

            </div>
            <div class="pic">
                <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            </div>
            <div class="formtgl">
                <form action="pemesanan.php" method="POST">
                    <table align="center">
                        <tr>

                            <td>
                                <h4>Tanggal Cek In</h4>
                            </td>
                            <td>
                                <h4 style="margin-left:50px">Tanggal Cek Out</h4>
                            </td>
                            <td>
                                <h4 style="margin-left:50px">Jumlah Kamar</h4>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="date" class="validate[required]" id="date" name="tglcekin"></td>
                            <td> <input type="date" class="validate[required]" id="date" name="tglcekout" style="margin-left:50px"></td>
                            <td> <input type="text" maxlength="20" size="20" style="margin-left:50px" id="Nama" name="qpesan" /></td>

                            <th colspan="2"><input type="submit" name="simpan" value="Pesan" href="" style="margin-left:50px;" />
                        </tr>

                    </table>
                </form>
            </div>

        </div>
        <div class="tentang">
            <h2>Tentang Kami</h2>
            <h2>Lepaskan diri anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau; Kid's Club yang luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000 delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.</h2>
        </div>
    </body>
</noframe>

</html>