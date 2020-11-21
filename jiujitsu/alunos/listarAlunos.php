<?php require_once "../conexao/ConexaoPDO.php"; ?>
<h1>Manutenção de Alunos</h1>
<hr>
<h2>Novo Aluno</h2>
<form action="inserirAluno.php" method="POST">
<input type="text" name="inputNome" id="inputNome" placeholder="Digite o nome do aluno" />
<input type="submit" value="Cadastrar Aluno" />
</form>
<HR>
<?php 
$conexao = ConexaoPDO::getInstance();
$query = "SELECT * FROM alunos";
$stmt = $conexao->prepare($query);
$stmt->execute();
$alunos = $stmt->fetchAll();
?>
<table border="1">
<tr>
<td>ID</td>
<td>NOME</td>
<td>AÇÕES</td>
</tr>

<?php 
foreach($alunos as $registro=>$aluno){
    ?>
<tr>
    <td> <?php echo $aluno["id"]; ?> </td>
    <td> <?php echo $aluno["nome"]; ?> </td>
    <td><a href="excluirAluno.php?id=<?php echo $aluno["id"]; ?>" >Excluir</a></td><!-- (* cada linha da tabela vai possuir a opção de excluir o registro pelo id) -->
<!-- (* cada linha da tabela vai possuir a opção de excluir o registro pelo id) -->
</tr>
<?php } ?>
</table>