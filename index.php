<?php

//Verificacao a existencia de uma sessao
if(!isset($_SESSION)) {
    session_start();
}

//Orientacao a Objetos com PHP

require './lib/autoload.php';

$smarty = new Template(); //Carrega a biblioteca
$categorias = new Categorias();
$categorias->GetCategorias();


//Valores para o template
$smarty->assign('NOME', 'ALVARO LIMA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_NOME', Config::SITE_NOME); // Pagina inicio
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME()); // Pagina inicio
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho()); // Pagina do Carrinho
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos()); // Pagina para os produtos
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato()); // Pagina para o Contato
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta()); // Pagina para a Conta do Usuario
$smarty->assign('TITULO_SITE', Config::SITE_NOME); 
$smarty->assign('CATEGORIAS', $categorias->GetItens()); 


$smarty->display('index.tpl');
?>