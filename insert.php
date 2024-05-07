<?php
echo "Inserindo dados abaixo... <br>";
require('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Função para inserir um novo registro no banco de dados
    function inserirAluno($pdo, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade) {
        $sql = "INSERT INTO alunos (nome, email, sexo, endereco, numero, complemento, bairro, cidade, uf, modalidade) VALUES (:nome, :email, :sexo, :endereco, :numero, :complemento, :bairro, :cidade, :uf, :modalidade)";
        $stmt = $pdo->prepare($sql);
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

    // Chamada da função de inserção somente dentro do bloco if que verifica o método POST
    if (inserirAluno($conexao, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade)) {
        echo "Registro inserido com sucesso!<br>";
        echo "<a href='index.php'>Voltar para a lista</a>";
    } else {
        echo 'Erro ao inserir o registro.';
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
