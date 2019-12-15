<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
            <label class="control-label col-sm-3">Nome*:</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required autofocus> <br>
            </div>
            <label class="control-label col-sm-3">Razão*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="razao" name="razao" placeholder="Razao" required> <br>
            </div>
            <label class="control-label col-sm-3">Tipo Documento*:</label>
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="tipo_documento" name="tipo_documento" placeholder="Tipo Documento" required> <br>
            </div>
            <label class="control-label col-sm-3">Documento*:</label>      
            <div class="col-sm-9">   
                <input class="form-control" type="number" id="documento" name="documento" placeholder="Documento" required> <br>
            </div>
            <label class="control-label col-sm-3">Cep*:</label>    
            <div class="col-sm-9">  
                <input class="form-control" type="number" id="cep" name="cep" placeholder="Cep" required> <br>
            </div>
            <label class="control-label col-sm-3">Endereço*:</label>     
            <div class="col-sm-9">  
                <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereco" required> <br>
            </div>
            <label class="control-label col-sm-3">Bairro*:</label>    
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro" required> <br>
            </div>
            <label class="control-label col-sm-3">Cidade*:</label>       
            <div class="col-sm-9">     
                <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade" required> <br>
            </div>
            <label class="control-label col-sm-3">UF*:</label>       
            <div class="col-sm-9">     
                <input class="form-control" type="text" id="uf" name="uf" placeholder="UF" required> <br>
            </div>
            <label class="control-label col-sm-3">Telefone*:</label>       
            <div class="col-sm-9">      
                <input class="form-control" type="number" id="telefone" name="telefone" placeholder="Telefone" required> <br>
            </div>
            <label class="control-label col-sm-3">Email*:</label>        
            <div class="col-sm-9">     
                <input class="form-control" type="text" id="email" name="email" placeholder="Email" required> <br>
            </div>
            <label class="control-label col-sm-3">Tabelião*:</label>        
            <div class="col-sm-9">     
                <input class="form-control" type="text" id="tabeliao" name="tabeliao" placeholder="Tabeliao" required> <br>
            </div>
            <label class="control-label col-sm-3">Ativo*:</label>        
            <div class="col-sm-9">    
                <input class="form-control" type="text" id="ativo" name="ativo" placeholder="Ativo" required>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-9">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
            </div>
        </form>
    </div>

    <script language="javascript" type="text/javascript">
        function formatarMoeda() {
            var elemento = document.getElementById('preco');
            var valor = preco.value;

            valor = valor + '';
            valor = parseInt(valor.replace(/[\D]+/g, ''));
            valor = valor + '';
            valor = valor.replace(/([0-9]{2})$/g, ",$1");

            if (valor.length > 6) {
                valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
            }

            elemento.value = valor;
        }



        function validar(formulario) {
            var quantidade = form.quantidade.value;
            var preco = form.preco.value;
            for (i = 0; i <= formulario.length - 2; i++) {
                if ((formulario[i].value == "")) {
                    alert("Preencha o campo " + formulario[i].name);
                    formulario[i].focus();
                    return false;
                }
            }
            if (quantidade <= 0) {
                alert('');
                form.quantidade.focus();
                return false;
            }
            if (preco <= 0) {
                alert('');
                form.preco.focus();
                return false;
            }
            formulario.submit();
        }

    </script>
</body>

</html>
