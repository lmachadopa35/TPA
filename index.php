<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <a href="cadastro.php">Adicionar Novo Aluno</a>
    <br><br>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Modalidade</th>
            <th>Ações</th>
        </tr>
        <?php
        require('conexao.php');

        // Função para listar todos os registros do banco de dados
        function listarAlunos($pdo) {
            $sql = "SELECT * FROM alunos";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // Listar alunos
        $alunos = listarAlunos($conexao);

        foreach ($alunos as $aluno) {
            echo "<tr>";
            echo "<td>" . $aluno['idAluno'] . "</td>";
            echo "<td>" . $aluno['nome'] . "</td>";
            echo "<td>" . $aluno['email'] . "</td>";
            echo "<td>" . $aluno['sexo'] . "</td>";
            echo "<td>" . $aluno['endereco'] . "</td>";
            echo "<td>" . $aluno['numero'] . "</td>";
            echo "<td>" . $aluno['complemento'] . "</td>";
            echo "<td>" . $aluno['bairro'] . "</td>";
            echo "<td>" . $aluno['cidade'] . "</td>";
            echo "<td>" . $aluno['uf'] . "</td>";
            echo "<td>" . $aluno['modalidade'] . "</td>";
            echo "<td>
                    <a href='edit.php?id=" . $aluno['idAluno'] . "'>Editar</a>
                    <a href='delete.php?id=" . $aluno['idAluno'] . "'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
