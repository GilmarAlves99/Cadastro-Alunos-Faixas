<?php 
require_once '../conexao/ConexaoPDO.php';

$cor = $_POST['inputCor'];
$id = $_POST['inputId'];

$conexao= ConexaoPDO::getInstance();

$query = "UPDATE faixas SET cor=:x where id=:y";
$stmt = $conexao->prepare($query);
$stmt->bindvalue("x",$cor,PDO::PARAM_STR);
$stmt->bindvalue("y",$id,PDO::PARAM_INT);

$stmt->execute();

echo "<script>location.href='listarFaixas.php'</script>";

?>

