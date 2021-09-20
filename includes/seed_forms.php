<div class="row item">      
        <h2>Cadastro de seed</h2>
        <form method="POST" >
            <div class="form-group">
                <label for="nome" class="">Nome*</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?=$objSeed->nome?>">
            </div> 
            <div class="form-group">      
                <label for="preco">Preço médio*</label>
                <input type="number" name="preco" class="form-control" id="preco" value="<?=$objSeed->preco?>">
            </div>
            <div class="form-group">        
                <label for="imagem">Imagem*</label>
                <input type="file" name="imagem" class="form-control" id="imagem" value="<?=$objSeed->imagem?>">
            </div>            
            <div class="form-group row mt-2 me-3" >
                <div class="col-9 "></div>
                <div class="col-2 text-right">                         
                    <div class="button">
                        <a class="button btn btn-info" href="seed_list.php">Listar</a>
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