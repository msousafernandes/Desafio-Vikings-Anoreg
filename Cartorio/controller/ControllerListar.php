<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCartorio();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['razao'] ."</td>";
            echo "<td>".$value['tipo_documento'] ."</td>";
            echo "<td>".$value['documento'] ."</td>";
            echo "<td>".$value['cep'] ."</td>";
            echo "<td>".$value['endereco'] ."</td>";
            echo "<td>".$value['bairro'] ."</td>";
            echo "<td>".$value['cidade'] ."</td>";
            echo "<td>".$value['uf'] ."</td>";
            echo "<td>".$value['telefone'] ."</td>";
            echo "<td>".$value['email'] ."</td>";
            echo "<td>".$value['tabeliao'] ."</td>";
            echo "<td>".$value['ativo'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

