<?php
require('conexao.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Função para buscar os dados do aluno a ser editado
    function buscarAluno($pdo, $id) {
        $sql = "SELECT * FROM alunos WHERE idAluno = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Busca os dados do aluno
    $aluno = buscarAluno($conexao, $id);

    if ($aluno) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
</head>
<body>
    <h1>Editar Aluno</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="idAluno" value="<?php echo $aluno['idAluno']; ?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $aluno['email']; ?>" required>
        <br>
        <label>Sexo:</label>
        <input type="text" name="sexo" value="<?php echo $aluno['sexo']; ?>" required>
        <br>
        <label>Endereço:</label>
        <input type="text" name="endereco" value="<?php echo $aluno['endereco']; ?>" required>
        <br>
        <label>Número:</label>
        <input type="text" name="numero" value="<?php echo $aluno['numero']; ?>" required>
        <br>
        <label>Complemento:</label>
        <input type="text" name="complemento" value="<?php echo $aluno['complemento']; ?>" required>
        <br>
        <label>Bairro:</label>
        <input type="text" name="bairro" value="<?php echo $aluno['bairro']; ?>" required>
        <br>
        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?php echo $aluno['cidade']; ?>" required>
        <br>
        <label>UF:</label>
        <input type="text" name="uf" value="<?php echo $aluno['uf']; ?>" required>
        <br>
        <label>Modalidade:</label>
        <input type="text" name="modalidade" value="<?php echo $aluno['modalidade']; ?>" required>
        <br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
<?php
    } else {
        echo "Aluno não encontrado.";
    }
}
?>
