<?php
//seleção do volunário
//var_dump("Nome: ".$nome);
//var_dump("Idade: ".$idade);
//Reformulação de formulário
function validaNome(string $nome) : bool 
{
    if(empty($nome)){
        $_SESSION['MESSAGE ERRO'] = 'O nome não pode ser vazio, preencha novamente.';
        //header('location:index.php')
        return false;
    }else if(strlen($nome) < 3){
        $_SESSION['MESSAGE ERRO']  = 'Seu nome têm que ter mais que 3 caracteres ! Preencha novamente seu nome.';
        //echo 'O nome deve ter mais de 3 caracteres.';
        //header('location:index.php') ;
        return false;   
    }else if(strlen($nome) > 30){
        $_SESSION['MESSAGE ERRO'] =  'Você ultrapassou 40 caracteres ! Preencha novamente seu nome .';
        //echo 'O nome e muito extenso !';
        //header('location:index.php');
        return false;
    }return true;
}
function validaIdade(string $idade)
{
    if(!is_numeric($idade)) {
        $_SESSION['MESSAGE ERRO'] = 'Informe novamente sua idade.';
        //echo 'informe um numero para a idade !' ;
        //header('location:index.php') ;
        return true;
    };
}
?>