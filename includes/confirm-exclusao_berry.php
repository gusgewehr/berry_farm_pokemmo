<div class="item">
<form method="POST" >
<h2>Excluir Berry</h2>
    <div class="form-group">        
        <p>Deseja realmente excluir a Berry
            <strong> <?=$objBerry->nome?></strong>?
        </p>
    </div>            
    <div class="form-group row mt-2 me-5" >
        <div class="col-9 "></div>
        <div class="col-2 text-right">                         
            <div class="button">
                <a class="button btn btn-success" href="berry_list.php">Cancelar</a>
            </div>
        </div>
        <div class="col-1 pl-0">                                        
            <div class="button text-right">
                <button class="btn btn-danger" name="excluir" type="submit" >Confirmar</button>
            </div>
        </div>
    </div>
</form> 
</div>