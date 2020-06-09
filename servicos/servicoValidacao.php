<?php
/**Created by Visual Studio Code 
 * User Allyson
 * Date 09/06/2020
*/
//seleção do volunário
//var_dump("Nome: ".$nome);
//var_dump("Idade: ".$idade);
//Reformulação de formulário

function validaNome(string $nome) : bool 
{
    if(empty($nome)){
        $_SESSION['MESSAGE-ERRO'] = 'O nome não pode ser vazio, preencha novamente.';
        return false;
    }else if(strlen($nome) < 3){
        $_SESSION['MESSAGE-ERRO']  = 'Seu nome têm que ter mais que 3 caracteres ! Preencha novamente seu nome.';
        return false;   
    }else if(strlen($nome) > 30){
        $_SESSION['MESSAGE-ERRO'] =  'Você ultrapassou 40 caracteres ! Preencha novamente seu nome .';
        return false;
    }return true;
}
function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade)) {
        $_SESSION['MESSAGE-ERRO'] = 'Informe novamente sua idade.';
        return false;
    }
    return true;
}
?>