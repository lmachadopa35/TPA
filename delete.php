<?php
require('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Função para deletar o registro no banco de dados
    function excluirRegistro($pdo, $id) {
        $sql = "DELETE FROM alunos WHERE idAluno = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    if (excluirRegistro($conexao, $id)) {
        echo "Registro excluído com sucesso!<br>";
    } else {
        echo 'Erro ao excluir o registro.';
    }
    echo "<a href='index.php'>Voltar para a lista</a>";
} else {
    echo "ID do aluno não fornecido.";
}
?>
    