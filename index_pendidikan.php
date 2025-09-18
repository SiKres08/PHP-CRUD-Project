<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDIDIKAN</title>
    <link rel="stylesheet" href="style p.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
        <a href="Home.php"><img src="asset/logo.png" class="logo" alt=""></a>
            <ul>
                <li><a href="Home.php#pendidikan" class="warna"><b>HOME</b></a></li>
                <li><a href="?p=sd" class="warna"><b>SD</b></a></li>
                <li><a href="?p=smp" class="warna"><b>SMP</b></a></li>
                <li><a href="?p=smk" class="warna"><b>SMK</b></a></li>
                <li><a href="?p=kuliah" class="warna"><b>KULIAH</b></a></li>
            </ul>
            <a href="contact.php"><button class="button"><b>CONTACT</b></button></button></a>
        </div>
    </div>
    <div class="content">
        <div class="isi_content">
            <h1 style="text-align: center;">PENDIDIKAN</h1>
            <div>
                <?php
                    $p = $_GET['p'];
                    if($p=='sd'){
                        include "pendidikan/sd.php";
                    }else if($p=='smp'){
                        include "pendidikan/smp.php";
                    }else if($p=='smk'){
                        include "pendidikan/smk.php";
                    }else if($p=='kuliah'){
                        include "pendidikan/kuliah.php";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
            <p>
                Sekian, terima kasih telah berkunjung, apabila ada kritik dan saran bisa menghubungi kontak di bawah ini. <br><br>
                E-mail: kreskres1802@gmail.com <br>
                Dm: @nganggo_k.tok<br><br>
            </p>
            <div class="contact">
            <table>
                    <tr>
                        <td><a href=https://www.instagram.com/nganggo_k.tok><img src="asset/instagram 1.png" height="35px" width="35px" class="icon-item"></a></td>
                        <td><a href=https://www.facebook.com/kresna.mhrd><img src="asset/facebook 1.png" height="30px" width="30px"  class="icon-item"></a></td>
                        <td><a href=https://wa.me/qr/TFZGKXPR6HULJ1><img src="asset/whatsapp 1.png" height="30px" width="30px" class="icon-item"></a></td>
                    </tr>
                </table>
            </div>
            <p class="cpy">Copyright &copy; 2023</p>
    </div>
</body>
</html>