<?php

$servidor = '127.0.0.1';
$usuario = 'cauane';
$senha = 'etec';
$banco = 'etec';
//print-
$conexao = new mysqli($servidor, $usuario, $senha,$banco);

if($conexao->connect_error){
      echo "Não foi possível conectar";
}else{
    echo "conectado com sucesso!";

}
?> 