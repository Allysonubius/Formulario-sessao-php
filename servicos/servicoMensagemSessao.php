<?php
/**Created by Visual Studio Code 
 * User Allyson
 * Date 09/06/2020
*/
session_start();
//Funções
function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['MESSAGE-ERRO'] = $mensagem;
}
function obterMensagemErro(): ?string
{
    if(isset($_SESSION['MESSAGE-ERRO']))
        return $_SESSION['MESSAGE-ERRO'];
        return null;
}
?>