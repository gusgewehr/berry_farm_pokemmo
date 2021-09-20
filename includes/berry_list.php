<?php
    $resultados = '';
    foreach ($berrys as $berry) {
        $resultados .='
        <tr>
            <td scope="col">'.$berry->id.'</td>
            <td scope="col">'.$berry->nome.'</td>
            <td scope="col">'.$berry->preco.'</td>
            <td scope="col">'.$berry->seed1.'</td>
            <td scope="col">'.$berry->seed2.'</td>
            <td scope="col">'.$berry->seed3.'</td>
            <td scope="col">'.$berry->imagem.'</td>
            <td scope="col">
                <a href="edit_berry.php?id='.$berry->id.'" class="btn btn-outline-secondary btn-sm">Editar</a>
                <a href="exclude_berry.php?id='.$berry->id.'" class="btn btn-outline-danger btn-sm">Excluir</a>
            </td>

        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados: '<tr><td colspan="6" class="text-center"> Não há Berrys cadastrados</td></tr>';
?>


<div class="item">
    <table class="table table-striped" >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Semente 1</th>
                <th scope="col">Semente 2</th>
                <th scope="col">Semente 3</th>
                <th scope="col">Imagem</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>
</div>