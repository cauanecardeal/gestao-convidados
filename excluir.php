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
    $id = $_GET['id'];
    $sqlRemover = "DELETE FROM tb_convidados WHERE id_convidados = {$id}";
    $conexao->query($sqlRemover);

    header('Location: convidados.php');
}
?> 