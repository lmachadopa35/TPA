<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO ALUNO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php require("conexao.php"); ?>

<div class="container">
    <h2>CADASTRO DE ALUNO</h2>
    <form action="insert.php" method="POST">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Informe o nome" required>
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Informe o email" required>
            <label>Sexo</label><br>
            <input type="radio" id="M" name="sexo" value="M">
            <label for="html">Masculino</label>
            <input type="radio" id="F" name="sexo" value="F">
            <label for="css">Feminino</label>
            <input type="radio" id="O" name="sexo" value="O">
            <label for="javascript">Outro</label><br>
            <label>Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="Informe o endereço" required>
            <label>Número</label>
            <input type="text" class="form-control" name="numero" placeholder="" required>
            <label>Complemento</label>
            <input type="text" class="form-control" name="complemento" placeholder=""><br>
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="">
            <label>UF</label>
            <select name="uf" class="form-control" required>
                <option value="">Selecione...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select><br>
            <label>Modalidade</label>
            <select name="modalidade" class="form-control" required>
                <option value="">Selecione...</option>
                <option value="Natação">Natação</option>
                <option value="Pilates">Pilates</option>
                <option value="Musculação">Musculação</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>
