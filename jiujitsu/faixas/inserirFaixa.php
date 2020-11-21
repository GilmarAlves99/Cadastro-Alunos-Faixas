<?php require_once "../conexao/ConexaoPDO.php"; 

$cor = $_POST['inputCor'];
$conexao = ConexaoPDO::getInstance();
$query = "INSERT INTO faixas(cor) VALUES (:x)";
$stmt = $conexao->prepare($query);
$stmt->bindvalue("x", $cor,PDO::PARAM_STR);
$stmt->execute();
echo "<script>location.href='listarFaixas.php'</script>";

?>

