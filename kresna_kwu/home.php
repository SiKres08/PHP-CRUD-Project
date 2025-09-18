<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web.css">
    <title>PORTOFOLIO KRESNA</title>
    <style>
        @font-face {
            font-family: 'montserrat-medium';
            src: url(font/montserrat/Montserrat-Medium.ttf);}
        @font-face {
            font-family: 'montserrat-extrabold';
            src: url(font/montserrat/Montserrat-ExtraBold.ttf);}
        @font-face {
            font-family: 'montserrat-regular';
            src: url(font/montserrat/Montserrat-Regular.ttf);}
    </style>
</head>
<body>
    <div class="header" id="home">
        <div class="navbar">
            <a href="#home"><img src="asset/logo.png" class="logo" alt=""></a>
            <ul>
                <li><a href="#home" class="warna"><b>HOME</b></a></li>
                <li><a href="#about" class="warna"><b>ABOUT</b></a></li>
                <li><a href="#portofolio" class="warna"><b>PORTOFOLIO</b></a></li>
            </ul>
            <a href="#contact"><button class="button"><b>CONTACT</b></button></a>
        </div>
        <div class="judul">
            <ul>
                <li class="teks">
                    <h1>Kalo Anda Minat <br><span>Dibuatin Desain,</span><br> Sini Tak Angkati!</h1>
                    <p>
                        Saya <span style="color:#9900CC;"><b>Muhammad Kresna Mahardhika</b></span>,
                        saya adalah seorang penggiat desain grafis
                    </p>
                </li>
                <li>
                    <div class="foto">
                        <img src="asset/personal/kres.png" class="kres" height="480">
                    </div> 
                </li>
            </ul>
        </div>
    </div>
    <div class="about" id="tentang">
        <div>
            <table class='tabel' cellpadding="10px">
                <tr>
                    <td>
                        <img src="asset/personal/si kres.png" height="500px" class="gembar">
                    </td>
                    <td class="isian">
                        <h1>TENTANG SAYA</h1>
                        <p>
                        Perkenalkan, nama saya <span style="color:#9900CC;"><b>Muhammad Kresna Mahardhika</b></span>, orang-orang biasa memanggil saya dengan sebutan "kres". Kesibukan saya sehari-hari adalah sok sibuk aja.
                        Tetapi, sok sibuk saya bukan hanya sekadar sok sibuk, karena hari-hari saya membuat desain apabila ada waktu, membuat portofolio sebanyak mungkin adalah kegemaran saya. 
                        Banyak desain yang sudah saya buat, untuk saya sendiri, maupun hanya untuk kepentingan suatu organisasi yang saya masuki. Anda berminat? Mari kontak sini!
                        </p>  
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="pendidikan" id="pendidikan">
        <h1>PENDIDIKAN</h1>
        <div class="card">
            <div class="container">
                <a href="index_pendidikan.php?p=sd" class="warna">
                    <div class="sd">
                        <img src="asset/icon/sd.png" width="110px" height="70" style="opacity: 0.3;" alt="">
                        <h2 style="text-decoration: none;">SD</h2>
                    </div>
                </a>
                <a href="index_pendidikan.php?p=smp" class="warna">
                    <div class="smp">
                        <img src="asset/icon/smp.png" width="110px" height="70" style="opacity: 0.3;" alt="">
                        <h2>SMP</h2>
                    </div>
                </a>
                <a href="index_pendidikan.php?p=smk" class="warna">
                    <div class="smk">
                        <img src="asset/icon/sma.png" width="110px" height="70" style="opacity: 0.3;" alt="">
                        <h2>SMK</h2>
                    </div>
                </a>
                <a href="index_pendidikan.php?p=kuliah" class="warna">
                    <div class="kuliah">                        <img src="asset/icon/kuliah.png" width="110px" height="70" style="opacity: 0.3;" alt="">
                        <h2>KULIAH</h2>
                    </div>
                </a>    
            </div>
        </div>
    </div>
    <div class="portofolio" id="portofolio">
        <h1>PORTOFOLIO</h1>
        <div class="card1">
            <div class="container1">
                <table class="tabel1">
                    <tr>
                        <td>
                            <a href="index_portofolio.php?p=poster" class="warna">
                                <div class="poster">
                                    <img src="asset/icon/poster.png" alt="" height="100px">
                                    <h2 style="font-size: 15px; ">POSTER</h2>
                                </div>
                            </a>
                        </td>
                        <td>
                            <a href="index_portofolio.php?p=banner" class="warna">
                                <div class="banner">
                                    <img src="asset/icon/banner.png" alt="" width="100px">
                                    <h2 style="font-size: 15px;">BANNER</h2>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="index_portofolio.php?p=sertifikat" class="warna">
                                <div class="sertifikat">
                                    <img src="asset/icon/sertifikat.png" alt="" width="100px">
                                    <h2 style="font-size: 15px;">SERTIFIKAT</h2>
                                </div>
                            </a>
                        </td>
                        <td>
                            <a href="index_portofolio.php?p=flyer" class="warna">
                                <div class="flyer">
                                    <img src="asset/icon/flyer.png" alt="" height="100px">
                                    <h2 style="font-size: 15px;">FLYER</h2>
                                </div>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="minat" id="contact">
        <div class="isi_minat">
            <h1>Anda Berminat?</h1>
            <p>Bisa hubungi kami dengan menekan tombol di bawah ini.</p>
            <a href="contact.php"><button>CONTACT US</button></button></a>
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