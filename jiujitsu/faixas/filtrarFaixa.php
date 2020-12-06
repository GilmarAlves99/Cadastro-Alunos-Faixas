<?php require_once "../conexao/ConexaoPDO.php"; ?>
<h1>Manutenção de faixas</h1>
<a href="../index.php"> Voltar</a>
<hr>
<h2>Filtrar/Buscar Faixas</h2>
<form action="" method="POST">
    <label>Digite a parte da cor desejada</label>
<input type="text" name="inputCor" id="inputCor" />
<input type="submit" value="Buscar Faixa" />
</form>
<HR>

<?php 
$cor = "";
if(isset($_POST['inputCor'])){
$cor = $_POST['inputCor'];
}

$conexao = ConexaoPDO::getInstance();
$query = "SELECT * FROM faixas WHERE cor LIKE :valor ";
$stmt = $conexao->prepare($query);
//Pelo o que ela vai ser substituida
$stmt->bindValue("valor", "%".$cor."%" ,PDO::PARAM_STR);
$stmt->execute();
$faixas = $stmt->fetchAll();
?>
<table border="1">
<tr>
<td>ID</td>
<td>COR</td>
<td>AÇÕES</td>
</tr>

<?php 
foreach($faixas as $registro=>$faixa){
    ?>
<tr>
    <td> <?php echo $faixa["id"]; ?> </td>
    <td> <?php echo $faixa["cor"]; ?> </td>
    <td><a href="excluirFaixa.php?id=<?php echo $faixa["id"]; ?>" >Excluir</a>
    <a href="frmEditarFaixa.php?id=<?php echo $faixa["id"]; ?>" >Editar</a>
</td><!-- (* cada linha da tabela vai possuir a opção de excluir o registro pelo id) -->
</tr>
<?php } ?>

</table>