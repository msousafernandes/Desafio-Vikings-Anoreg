<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCartorio($nome, $razao,$tipo_documento,$documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $tabeliao, $ativo){
        $stmt = $this->mysqli->prepare("INSERT INTO cartorios (`nome`, `razao`,`tipo_documento`, `documento`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `telefone`, `email`, `tabeliao`, `ativo`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssssss", $nome, $razao, $tipo_documento, $documento, $cep, $endereco, $bairro, $cidade, $uf, $telefone, $email, $tabeliao, $ativo);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCartorio(){
        $result = $this->mysqli->query("SELECT * FROM cartorios");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCartorio($id){
        if($this->mysqli->query("DELETE FROM `cartorios` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaCartorio($id){
        $result = $this->mysqli->query("SELECT * FROM cartorios WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateCartorio($nome,$razao,$tipo_documento,$documento,$cep,$endereco,$bairro,$cidade,$uf,$telefone,$email,$tabeliao,$ativo,$id){
        $stmt = $this->mysqli->prepare("UPDATE `cartorios` SET `nome` = ?, `razao`=?, `tipo_documento`=?, `documento`=?, `cep`=?, `endereco`=?,`bairro` = ?,`cidade` = ?,`uf` = ?,`telefone` = ?,`email` = ?,`tabeliao` = ?,`ativo` = ? WHERE `nome` = ?");
        $stmt->bind_param("ssssssssssssss",$nome,$razao,$tipo_documento,$documento,$cep,$endereco,$bairro,$cidade,$uf,$telefone,$email,$tabeliao,$ativo,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }


}
?>
