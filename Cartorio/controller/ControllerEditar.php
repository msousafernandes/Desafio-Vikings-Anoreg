<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
    private $razao;
    private $tipo_documento;
    private $documento;
    private $cep;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $telefone;
    private $email;
    private $tabeliao;
    private $ativo;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaCartorio($id);
        $this->nome         =$row['nome'];
        $this->razao        =$row['razao'];
        $this->tipo_documento        =$row['tipo_documento'];
        $this->documento    =$row['documento'];
        $this->cep          =$row['cep'];
        $this->endereco     =$row['endereco'];
        $this->bairro       =$row['bairro'];
        $this->cidade       =$row['cidade'];
        $this->uf           =$row['uf'];
        $this->telefone     =$row['telefone'];
        $this->email        =$row['email'];
        $this->tabeliao     =$row['tabeliao'];
        $this->ativo        =$row['ativo'];

    }
    public function editarFormulario($nome,$razao,$tipo_documento,$documento,$cep,$endereco,$bairro,$cidade,$uf,$telefone,$email,$tabeliao,$ativo,$id){
        if($this->editar->updateCartorio($nome,$razao,$tipo_documento,$documento,$cep,$endereco,$bairro,$cidade,$uf,$telefone,$email,$tabeliao,$ativo,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getRazao(){
        return $this->razao;
    }
    public function getTipodocumento(){
        return $this->tipo_documento;
    }
    public function getDocumento(){
        return $this->documento;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getUf(){
        return $this->uf;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTabeliao(){
        return $this->tabeliao;
    }
    public function getAtivo(){
        return $this->ativo;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['razao'],$_POST['tipo_documento'],$_POST['documento'],$_POST['cep'],$_POST['endereco'],$_POST['bairro'],$_POST['cidade'],$_POST['uf'],$_POST['telefone'],$_POST['email'],$_POST['tabeliao'],$_POST['ativo'],$_POST['id']);
}
?>
