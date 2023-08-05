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
            margin-top: 50px;
        }

        .formgtl {
            width: 100%
        }

        img {
            width: 75%;
            height: 75%;

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
                        <td width="700px">
                            <h1>HOTEL HEBAT</h1>
                        </td>

                        <td><a href="index.php">Home</a></td>
                        <td><a href="kamar.php">Kamar</a></td>
                        <td><a href="fasilitas.php">Fasilitas</a></td>

                    </tr>
                </table>

            </div>
            <div class="pic">
                <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            </div>
            <div class="formtgl">
                <form action="pemesanan_aksi.php" method="POST">
                    <table>

                        <tr>
                            <td>
                                <h4>Tanggal Cek In</h4>
                            </td>
                            <td>
                                <h4>Tanggal Cek Out</h4>
                            </td>
                            <td>
                                <h4 style="margin-left:50px">Jumlah Kamar</h4>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="date" readonly class="validate[required]" id="date" name="tglcekin" value="<?php echo $_POST['tglcekin']; ?>"></td>
                            <td> <input type="date" readonly class="validate[required]" id="date" name="tglcekout" value="<?php echo $_POST['tglcekout']; ?>"></td>
                            <td> <input type="text" readonly maxlength="20" size="20" style="margin-left:50px" id="Pesan" name="nama" value="<?php echo $_POST['qpesan']; ?>" /></td>


                        </tr>

                        <tr>
                            <td>
                                <h1>Form Pemesanan</h1>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <h4>Nama Pemesan</h4>
                            </td>
                            <td><input type="text" class="validate[required]" id="date" name="nama"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Email</h4>
                            </td>
                            <td><input type="text" class="validate[required]" id="date" name="email"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>No Henphone</h4>
                            </td>
                            <td><input type="text" class="validate[required]" id="date" name="hp"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Nama Tamu</h4>
                            </td>
                            <td><input type="text" class="validate[required]" id="date" name="tamu"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Status</h4>
                            </td>
                            <td><input type="text" class="validate[required]" id="date" name="status"></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                <h4>Type Kamar</h4>
                            </td>
                            <td>
                                <select class="validate[required]" name="kamar">
                                    <option value="#">=== Pilih Kamar ===</option>
                                    <option value="Superior">Superior</option>
                                    <option value="Deluxe">Deluxe</option>
                                    <option value="Standar">Standar</option>

                                </select>

                            </td>
                        </tr>

                        </tr>
                        <th colspan="2"><input type="submit" name="simpan" value="Pesan" style="margin-left:50px" />
                            <input type="submit" name="print" href="pemesanan_save.php" style="margin-left:50px" />

                    </table>
                </form>

            </div>

        </div>
    </body>
</noframe>

</html>