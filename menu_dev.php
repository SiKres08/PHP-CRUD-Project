<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR ORDER</title>
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
            color: white;
        }
    </style>
</head>
<body>
    <div class="isi">
        <div class="heading">
            <h1>DAFTAR ANTREAN (ORDER)</h1>
            <p>(Hanya bisa mengedit status)</p>
            <a href="antrian.php"><button class="button">Kembali</button></a>
        </div>
        <div class="tabel">
        <?php
        include "koneksi.php"
        ?>
        <table cellpadding='10px'>
                    <tr> 
                        <th>Tanggal</th> 
                        <th>Nama</th> 
                        <th></th> 
                        <th>Desain</th> 
                        <th>Deskripsi</th> 
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
        <?php $query = mysqli_query($koneksi, "SELECT * FROM `order` WHERE tanggal ORDER BY tanggal DESC;");
        while($row = mysqli_fetch_array($query)){
            $id = $row['id'];
            echo"
                    <tr>
                        <td>".$row['tanggal']."</td>
                        <td style='padding: 0 2%'>".$row['nama']."<td>
                        <td>".$row['desain']."</td>
                        <td>".$row['deskripsi']."</td>
                        <td>".$row['status']."</td>
                        <td>"?> 
                        <a class="edit" href="edit.php?id=<?=$row['id'];?>" style="margin= 0" >Edit Status</a>
                        <a class="hapus" href="hapus.php?id=<?=$row['id']?>" onclick="return confirm('Hapus data ini?')" >Hapus</a>
                        <?php "</td>
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