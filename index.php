<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 6;

//var_dump($nome);
//var_dump($idade);

if ($idade < 6){
    echo 'Idade abaixo do permitido';

}else if($idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}else if ($idade <=18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }

}else{
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}