<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrir o século do ano</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            background: #070705;
            font-family: 'Open Sans', sans-serif;

            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .box-content{
            width: 400px;
            background: #fff;
            border-radius: 6px;
            box-shadow: 4px 4px 15px rgba(0, 0, 0, .8);
            padding: 25px 15px;
        }

        form{
            width: 100%;
            text-align: center;
        }

        form h1{
            text-transform: uppercase;
            font-weight: 700;
            color: #070705;
        }

        .form-group{
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        .form-group input{
            border: 1px solid rgba(0, 0, 0, .3);
            border-radius: 5px;
            padding: 12px 15px;
        }

        button{
            border: none;
            background: #070705;
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 5px;
            margin-left: 8px;
            cursor: pointer;
        }

        .alert{
            display: none;
            align-items: center;
            justify-content: start;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 2px 2px 14px rgba(0, 0, 0, .3);
            margin: 15px 0;
            background: #53ac59;
            color: #fff;
        }

        .alert i{
            font-size: 35px;
            margin-right: 8px;
        }

        .alert strong{
            font-weight: 700;
            color: #070705;
            font-size: 35px;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    <div class="box-content">
        <form  method="post">
            <h1>Descobri o Século</h1>
            <div class="form-group">
                <input type="text" name="ano" placeholder="Informe o Ano Desejado"/>
                <button type="submit">Converter</button>
            </div>
            <div class="alert"><i class="fa fa-hourglass-start" aria-hidden="true"></i> O século do ano é <strong class="seculo"></strong></div>
        </form>
    </div>
</body>  <script src="https://kit.fontawesome.com/86f5b0a58f.js" crossorigin="anonymous"></script>
<script src="jquery.js"></script>
<script src="script.js"></script>
</html>

