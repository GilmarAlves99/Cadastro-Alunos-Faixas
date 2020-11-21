<?php require_once "../conexao/ConexaoPDO.php"; 

$nome = $_POST['inputNome'];
$conexao = ConexaoPDO::getInstance();
$query = "INSERT INTO alunos(nome) VALUES (:x)";
$stmt = $conexao->prepare($query);
$stmt->bindvalue("x", $nome,PDO::PARAM_STR);
$stmt->execute();
echo "<script>location.href='listarAlunos.php'</script>";

?>




