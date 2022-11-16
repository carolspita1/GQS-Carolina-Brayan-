<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <!-- <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(white);
        }
        div{
             background: #9152f8;
  background: -webkit-linear-gradient(top, #7579ff, #b224ef);
  background: -o-linear-gradient(top, #7579ff, #b224ef);
  background: -moz-linear-gradient(top, #7579ff, #b224ef);
  background: linear-gradient(top, #7579ff, #b224ef);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style> -->
</head>
<body>
    <div>
        <h1>Login</h1>
    <form action = "testeLogin.php" method = "POST">
        <input type="text" name = "nome" placeholder="Nome">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class= "inputSubmit" type = "submit" name = "submit" value = "Enviar">
    </form>
    </div>
</body>
</html>