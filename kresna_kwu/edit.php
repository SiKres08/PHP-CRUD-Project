
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT KLIENT</title>
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

        input[type=submit] {
            cursor: pointer;
            position: relative;
            padding: 16px 38px;
            font-family: montserrat-extrabold;
            font-size: 14px;
            color: white;
            background-color: #9900CC;
            border-radius: 10px;
            border: 0px solid;
            transition: 0.2s;
            margin-right: 10px;
        }

        input[type=submit]:hover {
            background-color: #bf00ff;
            box-shadow: 0px 0px 8px 0px #bf00ff
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px; 
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 6px; 
            margin-bottom: 16px; 
            resize: vertical; 
        }
    </style>
</head>
<body>
    <?include "koneksi.php"?>
    <div class="box">
        <div class="container">
        <form action="action_edit.php" method = "POST">
          <label for="status" style="color: #fff;">STATUS</label>
          <input type="hidden" name="id" value="<?= $_GET['id']?>" >
          <select id="status" name="status">
            <option value="waiting..">waiting..</option>
            <option value="on progress">on progress</option>
            <option value="done">done</option>
          </select>
          <input type="submit" value="submit" name="submit" style="margin-bottom: 5px;"> 
        </form>
        </div>
    </div>
</body>
</html>