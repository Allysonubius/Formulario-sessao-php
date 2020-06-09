<?php
//abertura php
//Sessão
session_start();
//Variaveis em PHP
$categorias = [];
$categorias[] = 'infantil' ;
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idosos';

//print_r($categoria);

//Inserção de um voluntário
$nome =  $_POST['nome'];
$idade = $_POST['idade'];

//seleção do volunário
//var_dump("Nome: ".$nome);
//var_dump("Idade: ".$idade);

//Reformulação de formulário
if(empty($nome))
{
    $_SESSION['ERRO MESSAGE'] = 'Você precisa escrever seu nome para seguir adiante.';
    header('location: index.php');
}
if(strlen($nome) < 3)
{
    $_SESSION['ERRO MESSAGE']  = 'O nome não pode ser vazio, por favor preencha novamente o Formulário.';
    //echo 'O nome deve ter mais de 3 caracteres.'; 
    header('location: index.php') ;   
}
if(strlen($nome) > 30)
{
    $_SESSION['ERRO MESSAGE'] =  'Você ultrapassou 40 caracteres ! Preencha novamente seu nome .';
    //echo 'O nome e muito extenso !';
    header('location: index.php');
}
if(!is_numeric($idade))
{
    $_SESSION['ERRO MESSAGE'] = 'Informe novamente sua idade.';
    //echo 'informe um numero para a idade !' ;
    header('location: index.php') ;
}

//Separação por paramentros das idades com if else.
if($idade >= 6 && $idade <= 12){
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria infantil.";
    }
    //echo 'infantil';
}else if($idade >= 13 && $idade <= 18){
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria adolescente.";
    }
    //echo 'adolescente';
}else if( $idade >= 19 && $idade <= 40){
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'adulto')
            echo "O nadador ".$nome." compete na categoria adulto.";
    }
    //echo 'adulto';
}else{
    for($I = 0; $I <= count($categorias);$I++)
    {
        if($categorias[$I] == 'idosos')
            echo "O nadador ".$nome." compete na categoria idosos.";
    }
    echo 'idosos';
}


//fechamento php
?>