<?php
    $resultados = '';
    foreach ($seeds as $seed) {
        $resultados .='
        <tr>
            <td scope="col">'.$seed->id.'</td>
            <td scope="col">'.$seed->nome.'</td>
            <td scope="col">'.$seed->preco.'</td>
            <td scope="col">'.$seed->imagem.'</td>
            <td scope="col">
                <a href="edit_seed.php?id='.$seed->id.'" class="btn btn-outline-secondary btn-sm">Editar</a>
                <a href="exclude_seed.php?id='.$seed->id.'" class="btn btn-outline-danger btn-sm">Excluir</a>
            </td>

        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados: '<tr><td colspan="6" class="text-center"> Não há Seeds cadastradas</td></tr>';
?>


<div class="item">
    <table class="table table-striped" >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Imagem</th>
                <th scope="col">Ações</th>

            </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>
</div>