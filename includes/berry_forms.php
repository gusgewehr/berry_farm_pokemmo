<?php
    $resultados = '';
    foreach ($seeds as $seed) {
        $resultados .='<option value="'.$seed->id.'">'.$seed->nome.'</option>';
    }
?>


<div class="row item">
    <div class="col-12">       
        <h2>Cadastro de Berrys</h2>
        <form  method="post" >
            <div class="form-group">
                <input type="hidden" name="id" >
                <label for="nome" class="">Nome*</label>
                <input type="text" name="nome" class="form-control" value="<?=$objBerry->nome?>">
            </div> 
            <div class="form-group">      
                <label for="preco">Preço médio*</label>
                <input type="number" name="preco" class="form-control" value="<?=$objBerry->preco?>">
            </div>
            <div class="form-group">        
                <label for="imagem">Imagem*</label>
                <input type="file" name="imagem" class="form-control" value="<?=$objBerry->nimagemome?>">
            </div>
            <div class="form-group">        
                <label for="seed1">Semente 1*</label>
                <select name="seed1" class="form-select" value="<?=$objBerry->seed1?>">
                    <?=$resultados?>
                </select>
            </div>
            <div class="form-group">        
                <label for="seed2">Semente 2*</label>
                <select name="seed2" class="form-select" value="<?=$objBerry->seed2?>">
                    <?=$resultados?>
                </select>
            </div>
            <div class="form-group">        
                <label for="seed3">Semente 3*</label>
                <select name="seed3" class="form-select" value="<?=$objBerry->seed3?>">
                    <?=$resultados?>
                </select>
            </div>        
            <div class="form-group row mt-2 me-3" >
                <div class="col-9 "></div>
                <div class="col-2 text-right">                         
                    <div class="button">
                        <a class="button btn btn-info" href="berry_list.php">Listar</a>
                    </div>
                </div>
                <div class="col-1 pl-0">                                        
                    <div class="button text-right">
                        <button class="btn btn-success" type="submit" >Gravar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>     
</div> 