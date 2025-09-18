<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link rel="stylesheet" href="contact.css">
    <style>
        @font-face {
        font-family: 'montserrat-medium';
        src: url(font/montserrat/Montserrat-Medium.ttf);
        }
        @font-face {
        font-family: 'montserrat-extrabold';
        src: url(font/montserrat/Montserrat-ExtraBold.ttf);
        }
        @font-face {
            font-family: 'montserrat-regular';
            src: url(font/montserrat/Montserrat-Regular.ttf);
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="container">
            <h1 style="text-align: center; color: #fff;">CONTACT US (ORDER)</h1>
            <form action="action.php" method = "POST">
          
              <label for="email" style="color: #fff;">E-Mail</label>
              <input type="email" id="email" name="email" placeholder="Tuliskan e-mail untuk dihubungi...">
          
              <label for="nama" style="color: #fff;">Atas Nama</label>
              <input type="text" id="nama" name="nama" placeholder="Tuliskan nama anda...">
          
              <label for="desain" style="color: #fff;">Desain yang dipilih</label>
              <select id="desain" name="desain">
                <option value="banner">Banner</option>
                <option value="poster">Poster</option>
                <option value="sertifikat">Sertifikat</option>
                <option value="flyer">Flyer</option>
              </select>
          
              <label for="deskripsi" style="color: #fff;">Deskripsi</label>
              <textarea id="deskripsi" name="deskripsi" placeholder="Ungkapkan perasaanmu..." style="height:200px"></textarea>
          
              <input type="submit" value="Submit" style="margin-bottom: 5px;"> 
            </form>
            <a href="antrian.php"><button class="button" >Lihat Antrian</button></a> <br>
            <a href="Home.php#contact"><button class="button">Batalkan</button></a>
          </div>
    </div>
</body>
</html>