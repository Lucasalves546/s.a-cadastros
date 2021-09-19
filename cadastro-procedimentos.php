<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <h3>Cadastro de Procedimentos</h3>
  
</head>
<body>
    <section class="section1">
        <form class="form1" action="mysql.php" method="post">
            Nome:
            <input type="text" name="nome" id="nome"><br><br>
            Valor:
            <input type="number" name="valor" id="valor"><br><br>
            Gênero:
            <select name="genero">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select><br><br>
            <input class="button" type="submit" value="Salvar">
            <input class="button" type="reset" value="Limpar"><br><br>
        </form>
    </section>

    <section class="section2">
        <form class="form2" action="delete.php" method="post">
            Deletar Codigo:<br><br>
            <input type="text" name="id" id="id">
            <input class="button" type="submit" value="Deletar"><br><br>
        </form>
    </section>


    <section>
        <form action="atualizar.php" method="post">
            Atualizar Codigo:
            <input type="text" name="id" id="id"><br><br>
            Nome:
            <input type="text" name="nome" id="nome"><br><br>
            Valor:
            <input type="number" name="valor" id="valor"><br><br>
            Gênero:
            <select name="genero">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select><br><br>
            <input class="button" type="submit" value="Atualizar">
        </form>
    </section>
</body>
</html>