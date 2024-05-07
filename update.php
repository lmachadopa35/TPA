<?php
echo "Atualizando dados abaixo... <br>";
require('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["idAluno"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $modalidade = $_POST["modalidade"];
    echo "<hr>";

    // Função para atualizar o registro no banco de dados
    function atualizarAluno($pdo, $id, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade) {
        $sql = "UPDATE alunos SET nome = :nome, email = :email, sexo = :sexo, endereco = :endereco, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, uf = :uf, modalidade = :modalidade WHERE idAluno = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
        $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
        $stmt->bindParam(':numero', $numero, PDO::PARAM_INT);
        $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
        $stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
        $stmt->bindParam(':uf', $uf, PDO::PARAM_STR);
        $stmt->bindParam(':modalidade', $modalidade, PDO::PARAM_STR);
        return $stmt->execute();
    }
}

if (atualizarAluno($conexao, $id, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade)) {
    echo "Registro atualizado com sucesso!<br>";
    echo "<a href='index.php'>Voltar para a lista</a>";
} else {
    echo 'Erro ao atualizar o registro.';
}
?>
