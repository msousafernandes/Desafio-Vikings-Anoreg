<?php
require_once("banco.php");

class Cadastro extends Banco {

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


    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setRazao($string){
        $this->razao = $string;
    }
    public function setTipodocumento($string){
        $this->tipo_documento = $string;
    }
    public function setDocumento($string){
        $this->documento = $string;
    }
    public function setCep($string){
        $this->cep = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setBairro($string){
        $this->bairro = $string;
    }
    public function setCidade($string){
        $this->cidade = $string;
    }
    public function setUf($string){
        $this->uf = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setTabeliao($string){
        $this->tabeliao = $string;
    }
    public function setAtivo($string){
        $this->ativo = $string;
    }
    //Metodos Get
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


    public function incluir(){
        return $this->setCartorio($this->getNome(),$this->getRazao(),$this->getTipodocumento(),$this->getDocumento(),$this->getCep(),$this->getEndereco(),$this->getBairro(),$this->getCidade(),$this->getUf(),$this->getTelefone(),$this->getEmail(),$this->getTabeliao(),$this->getAtivo());
    }
}

?>
