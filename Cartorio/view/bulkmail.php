<?php require_once("../controller/ControllerSendmail.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<hr>
<a href="index.php" class="btn btn-default">Inicio</a>
<a href="cadastro.php" class="btn btn-success">Cadastar</a>
<a href="uploadxml.php" class="btn btn-success">Upload XML</a>
<a href="bulkmail.php" class="btn btn-success">Enviar Email</a>
<hr>


<form class="form-horizontal" action="bulkmail.php#formulario" method="post" role="form" data-toggle="validator">
      <!--<div class="form-group">
          <label class="control-label col-sm-3">Nome*:</label>
          <div class="col-sm-9">
              <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="seu nome" required >
              <div class="help-block with-errors"></div>
          </div>
      </div> -->
      <div class="form-group">
          <label class="control-label col-sm-3">Email*:</label>
          <div class="col-sm-9">
              <input type="email" class="form-control" name="email" id="email" value="" placeholder="exemplo@dominio.com" required>
              <div class="help-block with-errors"></div>
          </div>
      </div>
      <!--<div class="form-group">
          <label class="control-label col-sm-3">Telefone*:</label>
          <div class="col-sm-9">
              <input type="number" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
              <div class="help-block with-errors"></div>
          </div>
      </div>-->
      <div class="form-group">
          <label class="control-label col-sm-3">Assunto*:</label>
          <div class="col-sm-9">
              <select class="form-control" name="assunto" required>
                  <option value="" selected="selected" disabled="disabled"> -- Escolha uma opção --</option>
                  <option value="Errata Anoreg">Errata Anoreg</option>
                  <option value="Comunicado Anoreg">Comunicado Anoreg</option>
                  <option value="Comunicado Financerio Anoreg">Comunicado Financerio Anoreg</option>
              </select>
              <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-3">Mensagem*:</label>
          <div class="col-sm-9">
              <textarea class="form-control" id="exampleTextarea" rows="6" 
                        id="mensagem" name="mensagem" placeholder="sua mensagem" required></textarea>
              <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="form-group">
      <div class="col-sm-9">
              <input class = "btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
              <a name="formulario"></a>
              <div class="mensagem-alerta"><?php echo $msg ?></div>
          </div>
      </div>
</form>

