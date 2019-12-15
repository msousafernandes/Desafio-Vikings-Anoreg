<?php
require_once("../model/banco.php");

if(!empty($_FILES['arquivo']['tmp_name'])){
    $arquivo = new DomDocument();
    $arquivo->load($_FILES['arquivo']['tmp_name']);
    //var_dump($arquivo);
    
    $linhas = $arquivo->getElementsByTagName("Row");
    //var_dump($linhas);
    
    $primeira_linha = true;
    
    foreach($linhas as $linha){
        if($primeira_linha == false){
            $nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
            echo "Nome: $nome => OK <br>";
            
            $razao = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
            echo "Razao: $razao => OK <br>";

            $tipo_documento = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
            echo "Tipo Documento: $tipo_documento => OK <br>";

            $documento = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
            echo "Documento: $documento => OK <br>";

            $cep = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
            echo "Cep: $cep => OK <br>";

            $endereco = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
            echo "Endereco: $endereco => OK <br>";

            $bairro = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
            echo "Bairro: $bairro => OK <br>";

            $cidade = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
            echo "Cidade: $cidade => OK <br>";

            $uf = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
            echo "Uf: $uf => OK <br>";

            /*$telefone = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
            echo "Telefone: $telefone => OK <br>";

            $email = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
            echo "Email: $email => OK <br>";*/

            $tabeliao = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
            echo "Tabeliao: $tabeliao => OK <br>";

            $ativo = $linha->getElementsByTagName("Data")->item(10)->nodeValue;
            echo "Ativo: $ativo => OK <br>";

            echo "<hr>";
            
            //Inserir o usuário no BD
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $dbname = "db_cartorios";
            
            //Criar a conexao
            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 
            $result_cartorios = "INSERT INTO cartorios (nome, razao, tipo_documento, documento, cep, endereco, bairro, cidade, uf, /*telefone, email,*/ tabeliao, ativo) VALUES ('$nome', '$razao', '$tipo_documento','$documento', '$cep', '$endereco', '$bairro', '$cidade', '$uf',  '$tabeliao', '$ativo')";
            $resultado_cartorios = mysqli_query($conn, $result_cartorios);  
        }   
        $primeira_linha = false;   
    }
}