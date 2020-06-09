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
if(empty($nome)) {
    $_SESSION['MESSAGE ERRO'] = 'O nome não pode ser vazio, preencha novamente.';
    header('location:index.php');
}
if(strlen($nome) < 3) {
    $_SESSION['MESSAGE ERRO']  = 'Seu nome têm que ter mais que 3 caracteres ! Preencha novamente seu nome.';
    //echo 'O nome deve ter mais de 3 caracteres.';
    header('location:index.php') ;   
}
if(strlen($nome) > 30) {
    $_SESSION['MESSAGE ERRO'] =  'Você ultrapassou 40 caracteres ! Preencha novamente seu nome .';
    //echo 'O nome e muito extenso !';
    header('location:index.php');
}
if(!is_numeric($idade)) {
    $_SESSION['MESSAGE ERRO'] = 'Informe novamente sua idade.';
    //echo 'informe um numero para a idade !' ;
    header('location:index.php') ;
}
//Separação por paramentros das idades com if else.
if($idade >= 6 && $idade <= 12){
    //echo 'infantil';
    for($I = 0; $I <= count($categorias);$I++) {
        if($categorias[$I] == 'infantil') 
            //echo "O nadador ".$nome. " compete na categoria infantil.";
            $_SESSION['SUCESS MESSAGE'] = "O nadador ".$nome." compete na categoria ".$categorias[$I];
            header('location:index.php');
            return;
    }
}else if($idade >= 13 && $idade <= 18){
    //echo 'adolescente';
    for($I = 0; $I <= count($categorias);$I++) {
        if($categorias[$I] == 'adolescente') 
        //echo "O nadador ".$nome." compete na categoria adolescente.";
            $_session['MESSAGE SUCESS'] = "O nadador ".$nome." compete na categoria ".$categorias[$I];
            header('location:index.php');
            return;
    }
}else if( $idade >= 19 && $idade <= 40){
    //echo 'adulto';
    for($I = 0; $I <= count($categorias);$I++) {
        if($categorias[$I] == 'adulto') 
        //echo "O nadador ".$nome." compete na categoria adulto.";
            $_session['MESSAGE SUCESS'] = "O nadador ".$nome." compete na categoria ".$categorias[$I];
            header('location:index.php');
            return;
    }
}else{
    for($I = 0; $I <= count($categorias);$I++) {
        //echo 'idosos';
        if($categorias[$I] == 'idosos') 
        //echo "O nadador ".$nome." compete na categoria idosos.";
            $_session['MESSAGE SUCESS'] = "O nadador ".$nome." compete na categoria ".$categorias[$I];
            header('location:index.php');
            return;
    }
}
//fechamento php
?>