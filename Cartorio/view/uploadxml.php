<?php require_once("../controller/ControllerUploadxml.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>



<hr>
<a href="index.php" class="btn btn-default">Inicio</a>
<a href="cadastro.php" class="btn btn-success">Cadastar</a>
<a href="uploadxml.php" class="btn btn-success">Upload XML</a>
<a href="bulkmail.php" class="btn btn-success">Enviar Email</a>
<hr>

<h1>Upload dos Cartórios em XML</h1>
		
		<form method="POST" action="../controller/ControllerUploadxml.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			<!--<input class = "btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">-->
			<input class = "btn btn-primary" id="submit" name="btnSend" type="submit" value="Enviar">
</form>
