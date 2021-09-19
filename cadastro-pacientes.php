<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    label{

    }
</style>

<body>
    <form action="s.a.php" method="post">
        <div class="tittle">
            <h4>Cadastro de Pacientes<h4>
        </div>

        <div class="card">
            <label for="nome">Nome:</label>
            <input type="text" name="nome"><br><br>

            <label for="rua">Rua:</label>
            <input type="text" name="rua"><br><br>

            <label for="logradouro">Logradouro:</label>
            <input type="text" name="logradouro"><br><br>

            <label for="num">Número:</label>
            <input type="number" name="num"><br><br>

            <label for="complemento">Complemento:</label>
            <input type="text" name="complemento"><br><br>

            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro"><br><br>

            <label for="cep">CEP:</label>
            <input type="number" name="cep"><br><br>

            <label for="email">E-mail:</label>
            <input type="text" name="email"><br><br>

            <label for="tl_fixo">Telefone Fixo:</label>
            <input type="number" name="tl_fixo"><br><br>

            <label for="cel">Celular:</label>
            <input type="number" name="cel"><br><br>

            <label for="tl_sec">Telefone Secundário:</label>
            <input type="number" name="tl_sec"><br><br>

            <label for="assist">Tipo de Cadastro:</label>
            <select name="assist">
                <option value="C">Convenio</option>
                <option value="P">Particular</option>
                <option value="S">SUS</option>
            </select>

            <label for="a_data">Data:</label>
            <input type="date" name ="a_data">
        </div>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>


