<?php require_once "../conexao/ConexaoPDO.php"; ?>
<h1>Manutenção de faixas</h1>
<hr>
<h2>Nova faixa</h2>
<form action="inserirFaixa.php" method="POST">
<input type="text" name="inputCor" id="inputCor" placeholder="Digite a cor da faixa" />
<input type="submit" value="Cadastrar Faixa" />
</form>
<HR>
<?php 
$conexao = ConexaoPDO::getInstance();
$query = "SELECT * FROM faixas";
$stmt = $conexao->prepare($query);
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
    <td><a href="excluirFaixa.php?id=<?php echo $faixa["id"]; ?>" >Excluir</a></td><!-- (* cada linha da tabela vai possuir a opção de excluir o registro pelo id) -->
</tr>
<?php } ?>

</table>