<?php
require_once("../model/cadastroCartorio.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setRazao($_POST['razao']);
        $this->cadastro->setTipodocumento($_POST['tipo_documento']);
        $this->cadastro->setDocumento($_POST['documento']);
        $this->cadastro->setCep($_POST['cep']);
        $this->cadastro->setEndereco($_POST['endereco']);
        $this->cadastro->setBairro($_POST['bairro']);
        $this->cadastro->setCidade($_POST['cidade']);
        $this->cadastro->setUf($_POST['uf']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setEmail($_POST['email']);
        $this->cadastro->setTabeliao($_POST['tabeliao']);
        $this->cadastro->setAtivo($_POST['ativo']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o registro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
