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
            <table>
            <tr>
            <td width="300px"><h1>HOTEL HEBAT</h1></td>
            <td width="300px"><h1>RESEPSIONIS</h1></td>
            <td><a href="index_kamar.php">Kamar</a></td>
            <td width="150px" align="center"><a href="admin_kamar.php" >Fasilitas Kamar</a></td>
            <td><a href="admin_fasilitas.php">Fasilitas</a></td>
            <td><a href="login.php">Logout</a></td>
            
            </tr>
            </table>
    
    </div>
<div class="pic">
    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="75%" width="75%" alt="">
    <form method="GET">
        <div style="display: grid; grid: 30px / auto auto; margin-top: 50px; width: 75%; margin-left:auto; margin-right:auto">
    <div><input  type="date" placeholder="Search" aria-label="Search" name="data">
            <button  type="submit" name="cari2">
                Cari
            </button>
    </div>  
    <div style="text-align:right">
<input  type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button  type="submit" name="cari">
                Cari
            </button>
    </div>
    </div>
        
            
        </form>
</div>
<div class="formtgl">
    
    <table id="example" class="display responsive nowrap" style="width:100%" border="1">
    <thead>
      <tr>  
        <th>No</th>
        <th>Nama Tamu</th>
        <th>Tanggal Check-In</th>
        <th>Tanggal Check-Out</th>
        
        <th colspan="">Action</th>
      </tr>
    </thead>
    <tbody class="alert-success">
        
      <?php
      include 'koneksi.php';

      
    if(isset($_GET['cari'])){
		$cari = $_GET['keyword'];
		$data = mysqli_query($con, "SELECT * FROM tbpemesanan WHERE namaTamu LIKE '%".$cari."%'");				
	}else if(isset($_GET['cari2'])){
        $cari = $_GET['data'];
		$data = mysqli_query($con, "SELECT * FROM tbpemesanan WHERE tglCheckin LIKE '%".$cari."%'");	
    }
    else{
		$data = mysqli_query($con, "SELECT * from tbpemesanan");		
	}

      

while($row= mysqli_fetch_array($data)) {
       ?>
       <tr>
        <?php 
        
        ?>
        <td ><?php echo $row['noData']?></td>
        <td ><?php echo $row['namaTamu']?></td>
        <td ><?php echo $row['tglCheckin']?></td>
        <td ><?php echo $row['tglCheckout']?></td>
        
        
        
        
        <!-- <td><a href="resepsionis_checkin.php?del=<?php echo $row['idKamar']?>">Check-In</a></td> -->
        <?php '<td style="background-color: #22dd99"><button onclick="aksi('.$row['noData'].', '.$row['status'].')">'.$row['status'].'</button></td>'?>

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
    <script>
        
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
</noframe>
</html>