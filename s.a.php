<?php

    try {
        $con = new PDO("mysql:host=localhost;dbname=cadastro_paciente","root","");   
    }catch (PDOException $e) {
        echo "Erro no banco: " . $e->getMessage();
    }

    if(isset($_POST['nome'])){
        $nome = htmlspecialchars ($_POST['nome']);
        $rua = addslashes ($_POST['rua']);
        $log = addslashes ($_POST['logradouro']);
        $num = addslashes ($_POST['num']);
        $compl = addslashes ($_POST['complemento']);
        $bairro = addslashes ($_POST['bairro']);
        $cep = addslashes ($_POST['cep']);
        $email = addslashes ($_POST['email']);
        $tl_fixo = addslashes ($_POST['tl_fixo']);
        $cel = addslashes ($_POST['cel']);
        $tl_sec = addslashes ($_POST['tl_sec']);
        $assist = addslashes ($_POST['assist']);
        $data = addslashes ($_POST['a_data']);
    }         

    $var = $con->prepare("INSERT INTO tbl_paciente (nome, rua, logradouro, num, complemento, bairro, cep, email, tl_fixo, cel, tl_sec, assist, a_data) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :m)");
    $var->bindParam(":a", $nome);
    $var->bindParam(":b", $rua);
    $var->bindParam(":c", $log);
    $var->bindParam(":d", $num);
    $var->bindParam(":e", $compl);
    $var->bindParam(":f", $bairro);
    $var->bindParam(":g", $cep);
    $var->bindParam(":h", $email);
    $var->bindParam(":i", $tl_fixo);
    $var->bindParam(":j", $cel);
    $var->bindParam(":k", $tl_sec);
    $var->bindParam(":l", $assist);
    $var->bindParam(":m", $data);
    $var->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro Realizado</h1>
</body>
</html>