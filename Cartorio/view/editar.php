<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
            <label class="control-label col-sm-3">Nome*:</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus> <br>
            </div>
            <label class="control-label col-sm-3">Razão*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="razao" name="razao" value="<?php echo $editar->getRazao(); ?>" required> <br>
            </div>
            <label class="control-label col-sm-3">Tipo Documento*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="tipo_documento" name="tipo_documento" value="<?php echo $editar->getTipodocumento(); ?>" required> <br>
            </div>     
            <label class="control-label col-sm-3">Documento*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="number" id="documento" name="documento" value="<?php echo $editar->getDocumento(); ?>" required> <br>
            </div>    
            <label class="control-label col-sm-3">Cep*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="number" id="cep" name="cep" value="<?php echo $editar->getCep(); ?>" required> </br>
            </div>    
            <label class="control-label col-sm-3">Endereço*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="endereco" name="endereco" value="<?php echo $editar->getEndereco(); ?>" required> </br>
            </div>
            <label class="control-label col-sm-3">Bairro*:</label>
            <div class="col-sm-9">     
                <input class="form-control" type="text" id="bairro" name="bairro" value="<?php echo $editar->getBairro(); ?>" required> </br>
            </div>
            <label class="control-label col-sm-3">Cidade*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="cidade" name="cidade" value="<?php echo $editar->getCidade(); ?>" required> </br>
            </div>    
            <label class="control-label col-sm-3">UF*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="uf" name="uf" value="<?php echo $editar->getUf(); ?>" required> </br>
            </div>
            <label class="control-label col-sm-3">Telefone*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="number" id="telefone" name="telefone" value="<?php echo $editar->getTelefone(); ?>" required> </br>
            </div> 
            <label class="control-label col-sm-3">Email*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="email" name="email" value="<?php echo $editar->getEmail(); ?>" required> </br>
            </div>
            <label class="control-label col-sm-3">Tabelião*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="tabeliao" name="tabeliao" value="<?php echo $editar->getTabeliao(); ?>" required> </br>
            </div>
            <label class="control-label col-sm-3">Ativo*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="ativo" name="ativo" value="<?php echo $editar->getAtivo(); ?>" required> </br>
            </div>

            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
     
</body>

</html>
