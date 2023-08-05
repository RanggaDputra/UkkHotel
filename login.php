<?php 
include "koneksi.php";

if (isset($_POST['username'])) {
    $users = $con->query('select * from tbpegawai where nama="'.$_POST['username'].'"' );
    
    foreach($users as $user){
        if ($_POST['password'] == $user['password']) {
            switch($user["level"]){
                case '1':
                    header('Location: index_kamar.php');
                    break;
                    case '2':
                        header('Location: index.php');
                        break;
                        case '3':
                            header('Location: resepsionis.php');
                            break;
            }
        }
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>UKK</title>
</head>
<body>
    <div style="background-image: url('img/login.svg'); width: 400px; height:500px; margin:auto;" >
        <form action="#" method="post" style="text-align: center; padding-top:100px; ">
        <div>
            <label for="username" style="color: white"> Username </label>
        </div>
            
            <input type="text" name="username" placeholder="Masukkan Nama...." id="">
            <div>
                <label for="Password" style="color: white">Password </label>
            </div>
            
            <input type="password" name="password" placeholder="Masukkan Password...." id="">
            <div style="margin-top: 30px">
                <button type="submit">Login</button>
                <button><a href="index.php" style="background-color: #FFFFFF;" >Kembali</a></button>
                
            </div>
            
        </form>
    </div>
</body>
</html>