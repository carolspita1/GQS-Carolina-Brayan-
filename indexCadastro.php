<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Bairro: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereso'];
        $estado = $_POST['estado'];
        $bairro = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,data_nascimento,cidade,estado,bairro) 
        VALUES ($nome,$email,$data_nascimento,$cidade,$estado,$bairro)");
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
            
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #9152f8;
  background: -webkit-linear-gradient(top, #7579ff, #b224ef);
  background: -o-linear-gradient(top, #7579ff, #b224ef);
  background: -moz-linear-gradient(top, #7579ff, #b224ef);
  background: linear-gradient(top, #7579ff, #b224ef);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background: #9152f8;
  background: -webkit-linear-gradient(top, #7579ff, #b224ef);
  background: -o-linear-gradient(top, #7579ff, #b224ef);
  background: -moz-linear-gradient(top, #7579ff, #b224ef);
  background: linear-gradient(top, #7579ff, #b224ef);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="indexCadastro.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="endereso" id="endereso" class="inputUser" required>
                    <label for="endereso" class="labelInput">Endereço</label>
                </div>
                <!-- <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label> -->
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <div class="container-login100-form-btn">
						<a href="index.html">voltar</a>
            </fieldset>
        </form>
    </div>
</body>
</html>