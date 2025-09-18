<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERHASIL</title>
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

        *{
            font-family: montserrat-medium;
        }

        body{
            width: 100%;
            overflow-x: hidden;
            background-image: linear-gradient(rgb(31, 31, 31), rgb(31, 31, 31));
            text-align: center;
        }
        .container {
            padding: 30px;
            margin: auto;
            margin-top: 8%;
            border-radius: 20px;
            width: 20%;
            background-color: #232323;
        }

        .button{
            margin-top: 10px;
            cursor: pointer;
            position: relative;
            padding: 16px 32px;
            font-family: montserrat-extrabold;
            font-size: 14px;
            color: white;
            background-color: #9900CC;
            border-radius: 10px;
            border: 0px solid;
            transition: 0.2s;
        }

        .button:hover{
            background-color: #bf00ff;
            box-shadow: 0px 0px 8px 0px #bf00ff
        }


        img{
            background-color: #fff;
            border: 0 solid #fff;
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="container">
                <h1 style="color:#fff">ORDER BERHASIL!</h1>
                <img src="asset/checklist.png" alt="" height="250px">
                <a href="Antrian.php"><button class="button">Lihat Antrean</button></a><br>
                <a href="contact.php"><button class="button">Kembali</button></a>
        </div>
    </div>
</body>
</html>