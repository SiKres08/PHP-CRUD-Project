<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTOFOLIO</title>
    <link rel="stylesheet" href="style p.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
        <a href="Home.php"><img src="asset/logo.png" class="logo" alt=""></a>
            <ul>
                <li><a href="Home.php#portofolio" class="warna"><b>HOME</b></a></li>
                <li><a href="?p=poster" class="warna"><b>POSTER</b></a></li>
                <li><a href="?p=banner" class="warna"><b>BANNER</b></a></li>
                <li><a href="?p=sertifikat" class="warna"><b>SERTIFIKAT</b></a></li>
                <li><a href="?p=flyer" class="warna"><b>FLYER</b></a></li>
            </ul>
            <a href="contact.php"><button  class="button"><b>CONTACT</b></button></button></a>
        </div>
    </div>
    <div class="content">
        <div class="isi_content">
            <h1 style="text-align: center;">PORTOFOLIO</h1>
            <div>
                <?php
                    $p = $_GET['p'];
                    if($p=='banner'){
                        include "portofolio/banner.php";
                    }else if($p=='flyer'){
                        include "portofolio/flyer.php";
                    }else if($p=='poster'){
                        include "portofolio/poster.php";
                    }else if($p=='sertifikat'){
                        include "portofolio/sertifikat.php";
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
                        <td><a href="https://www.instagram.com/nganggo_k.tok" target="_blank"><img src="asset/instagram 1.png" height="35px" width="35px" class="icon-item"></a></td>
                        <td><a href=https://www.facebook.com/kresna.mhrd><img src="asset/facebook 1.png" height="30px" width="30px"  class="icon-item"></a></td>
                        <td><a href=https://wa.me/qr/TFZGKXPR6HULJ1><img src="asset/whatsapp 1.png" height="30px" width="30px" class="icon-item"></a></td>
                    </tr>
                </table>
            </div>
            <p class="cpy">Copyright &copy; 2023</p>
    </div>
</body>
</html>