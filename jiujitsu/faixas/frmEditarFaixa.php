<?php require_once "../conexao/ConexaoPDO.php";

$id = $_GET['id'];
$conexao = ConexaoPDO::getInstance();
$query = "SELECT * FROM faixas where id=:x"; //EDITANDO NO BANCO DE DADOS
$stmt = $conexao->prepare($query);
$stmt->bindvalue("x", $id, PDO::PARAM_STR);
$stmt->execute();
$faixa = $stmt->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutençaõ de Faixas</title>
</head>

<body>
    <h1>Manutençaõ de faixas</h1>
    <hr>
    <h2>Editar faixas</h2>

    <form action="editarFaixa.php" method="POST">
        <input type="hidden" name="inputId" value="<?php echo $faixa["id"]; ?>">
        <input type="text" name="inputCor" value="<?php echo $faixa["cor"]; ?>">

        <input type="submit" value="Editar Faixa" />
    </form>
    <hr>
</body>

</html>