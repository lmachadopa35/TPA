<h2>Projetos</h2>

<div class="panel panel-default">
    <div class="panel-heading text-right">
    <div class="pull-right"><a class="btn btn-primary" href='?classe=Projeto&acao=create'>Novo</a></div>
</div>
<br>
<div class="panel-body">
    <table id="tabela" class="table table-striped table-bordered table-hover"
    style="width:100%">

    <thead>
        <tr>
            <th>Nome</th>
            <th>Duração</th>
            <th width="280px">Ações</th>
</tr>
</thead>

<tbody>
    <?php foreach ($projetos as $projeto) { ?>
       <tr>
        <td><?=$projeto->nome?></td>
        <td><?=$projeto->duracao_dmY?></td>
        <td>
            <a class='btn btn-primary' href='?classe=Projeto&acao=read&id=<?=$projeto->id?>'>Ver</a>
            <a class='btn btn-primary' href='?classe=Projeto&acao=update&id=<?=$projeto->id?>'>Alterar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="<?=$projeto->id?>">Excluir</button>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>