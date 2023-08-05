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
            margin-left:100px;
        }
        .formgtl{
            width: 100%;
            position: relative;
            padding-right: 30px;
            margin: 5px;
        }
        img{
            
            
        }
        .tentang{
            width: 100%;
            text-align: center;
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
            <td width="800px"><h1>HOTEL HEBAT</h1></td>

            <td><a href="index.php" style="margin-left:50px">Home</a></td>
            <td><a href="kamar.php" style="margin-left:50px" >Kamar</a></td>
            <td><a href="fasilitas.php" style="margin-left:50px">Fasilitas</a></td>
            <td><a href="login.php" style="margin-left:50px">Login</a></td>
            
            </tr>
            </table>
    
    </div>
<div class="pic">
    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"  alt=""  width= "75%" height= "75%">
</div>
<div class="formtgl">
    <h1>Fasilitas</h1>
    <table  style="width:100%" >
    <thead>
      <tr>  
        
      </tr>
    </thead>
    <tbody class="alert-success">
      <?php
      include 'koneksi.php';
      $sql =mysqli_query($con, "SELECT * FROM tbfasilitas");

while($row= mysqli_fetch_array($sql)) {
       ?>
       <tr>
        <?php 
        $name = explode('/', $row['locatio']);
        ?>
        
        <td align="center"><?php echo "<img src='files/$name[1]' width='50%' height='50%' />";?></td>
        

      </tr>
      
      <?php
    }
    ?>
    <!-- <tr>
          <th colspan="10"><a href="admin_tambah_fasilitas.php"><img src="pngwing.com (2).png" height="10%" width="10%"  alt=""></a></th>
    </tr> -->
  </tbody>
</table>
    
</div>

    </div>
    <div class="tentang">
        <!-- <h2>Tentang Kami</h2>
        <h2>Kamu Anime ya?</h2> -->
    </div>
</body>
</noframe>
</html>