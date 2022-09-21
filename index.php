<?php
     $ola = "Olá";
     $nome = "Giovanna";
     $amigododono = false;
     $idade = 17;
        echo $ola.", eu sou a ".$nome. " e tenho ".$idade. " de idade."; 
 
    if($idade >= 18){
        echo "<br> Ele (a) pode entrar na balada!";
    }elseif($amigododono == true){
        echo "<br> Pode entrar na festa do amigo!";
    }else{
        echo "<br> Não pode entrar na balada!";
    }

    for($x = 1; $x<=100;$x++){
        echo "<br> Nome: ".$x."<br>";
    }

    $cont = 1;
    while($cont <= 100){
        echo "<br> convidado: ".$cont."<br>";
        $cont++;
    }
?>