<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>

<h3>Cadastro de Medicos</h3>

<form action="id-medicos.php" method="post">

    <label>
        Nome: <input type="text" name="nome"/>
    </label><br><br>

    <label >
        Rua: <input type="text" name="rua"/>
    </label><br><br>

    <label >
        Numero: <input type="text" name="numero"/>
    </label><br><br>

    <label >
        Logadouro: <input type="text" name="logadouro"/>
    </label><br><br>

    <label >
        Complemento: <input type="text" name="complemento"/>
    </label><br><br>

    <label >
        Bairro <input type="text" name="bairro"/>
    </label><br><br>

    <label >
        CEP: <input type="text" name="cep"/>
    </label><br><br>

    <label >
        E-mail: <input type="text" name="email"/>
    </label><br><br>

    <label >
        Celular: <input type="number" name="celular"/>
    </label><br><br>

    <label >
        Telefone Fixo: <input type="number" name="fixo"/>
    </label><br><br>

    <label >
        Telefone Secundario: <input type="number" name="secundario"/>
    </label><br><br>

    <label>
        Data: <input type="date" name="data"/>
    </label><br><br>
    

    <input class="button" type="reset" value="Limpar"><br><br>
    <input type="submit">

</form>
    
</body>
</html>