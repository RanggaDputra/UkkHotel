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

<noframe>
<body>
    <div id="warp">
        <div class="topmenu">
            <table >
            <tr>
            <td width="300px"><h1>HOTEL HEBAT</h1></td>
            <td ><h1>ADMIN</h1></td>
            
            <td><a href="index_kamar.php" style="margin-left:50px">Kamar</a></td>
            <td width="150px" align="center"><a  href="admin_kamar.php" >Fasilitas Kamar</a></td>
            <td><a href="admin_fasilitas.php" style="margin-left:5px">Fasilitas</a></td>
            <td><a href="login.php" style="margin-left:50px">Logout</a></td>
            </tr>
            </table>
    
    </div>
<div class="pic">
    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="75%" width="75%" alt="">
</div>
<div class="formtgl">
    
    <table id="example" class="display responsive nowrap" style="width:100%" border="1">
    <thead>
      <tr>  
        <th>No</th>
        <th>Type Kamar</th>
        <th>Jumlah Kamar</th>
        <th>Gambar</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody class="alert-success">
      <?php
      include 'koneksi.php';
      $sql =mysqli_query($con, "SELECT * FROM tbtypekamar");

while($row= mysqli_fetch_array($sql)) {
       ?>
       <tr>
        <?php 
        $name = explode('/', $row['lokasi']);
        ?>
        <td ><?php echo $row['idKamar']?></td>
        <td ><?php echo $row['typeKamar']?></td>
        <td ><?php echo $row['jumlahKamar']?></td>
        <td align="center"><?php echo "<img src='files2/$name[1]' width='25%' height='25%' margin-top='25px' />";?></td>
        
        
        <td><a href="admin_kamar_edit.php?del=<?php echo $row['idKamar']?>">EDIT</a></td>
        <td><a href="admin_kamar_delete.php?del=<?php echo $row['idKamar']?>">DELETE</a></td>

      </tr>
      
      <?php
    }
    ?>
    <!-- <tr>
          <th colspan="10"><a href="admin_tambah_fasilitas.php"><img src="pngwing.com (2).png" height="10%" width="10%"  alt=""></a></th>
    </tr> -->
  </tbody>
</table>
<a href="admin_tambah_kamar.php"><img src="pngwing.com (2).png" height="10%" width="10%" style="margin-left:675px" alt=""></a>
    
</div>

    </div>
</body>
</noframe>
</html>