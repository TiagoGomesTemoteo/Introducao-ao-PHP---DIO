<?php

function validaNome(string $nome) : bool {
    if(empty($nome)){
        setarMensagemErro( 'O nome não pode ser vazio');
        return false;
    }
    else if(strlen($nome) <= 3){
        setarMensagemErro('O nome deve conter mais de três caracteres');
        return false;
    }
    else if(strlen($nome) > 40){
        setarMensagemErro('O nome é muito extenso');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{
     if(!is_numeric($idade)){
        setarMensagemErro('Informe um número para idade');
        return false;

    }else if ($idade < 6){
        setarMensagemErro('Idade abaixo do permitido');
        return false;
    }
    return true;
}

