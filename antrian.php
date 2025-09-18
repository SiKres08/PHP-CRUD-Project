<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANTRIAN</title>
    <link rel="stylesheet" href="antre.css">
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
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="inpo">
        <a href="menu_dev.php"><button class="tombol"></button></a>
    </div>
    <div class="isi">
        <div class="heading">
            <h1>DAFTAR ANTREAN (ORDER)</h1>
            <p>Silahkan cek daftar antrian anda, lalu tunggu hingga mendapatkan E-Mail dari pemilik web</p>
            <a href="contact.php"><button class="button">Kembali</button></a>
        </div>
        <div class="tabel">
        <?php
        include "koneksi.php";
        ?>
        <table cellpadding='10px'>
                    <tr> 
                        <th>Tanggal</th> 
                        <th>Nama</th> 
                        <th></th> 
                        <th>Desain</th> 
                        <th>Deskripsi</th> 
                        <th>Status</th>
                    </tr>
        <?php $query = mysqli_query($koneksi, "SELECT `tanggal`, `nama`, `desain`, `deskripsi`, `status` FROM `order` WHERE tanggal ORDER BY tanggal DESC;");
        while($row = mysqli_fetch_array($query)){
            echo"
                    <tr>
                        <td>".$row['tanggal']."</td>
                        <td>".$row['nama']."<td>
                        <td>".$row['desain']."</td>
                        <td>".$row['deskripsi']."</td>
                        <td>".$row['status']."</td>
                    </tr>
        ";
        }
        ?>    
          </table>  
        </div>
    </div>
    <div class="footer">
            <p>
                Sekian, terima kasih telah berkunjung, apabila ada kritik dan saran bisa menghubungi kontak di bawah ini. <br><br>
                E-mail: kreskres1802@gmail.com <br>
                Dm: @nganggo_k.tok<br><br>
            </p>
            <div class="contact">
                    <ul>
                        <li><a href=https://www.instagram.com/nganggo_k.tok><img src="asset/instagram 1.png" height="35px" width="35px" class="icon-item"></a></li>
                        <li><a href=https://www.facebook.com/kresna.mhrd><img src="asset/facebook 1.png" height="30px" width="30px"  class="icon-item"></a></li>
                        <li><a href=https://wa.me/qr/TFZGKXPR6HULJ1><img src="asset/whatsapp 1.png" height="30px" width="30px" class="icon-item"></a></li>
                    </ul>
            </div>
            <p class="cpy">Copyright &copy; 2023</p>
    </div>
</body>
</html>