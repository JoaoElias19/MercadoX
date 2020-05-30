<?php


$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);


$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTema());
$smarty->assign('IMAGENS', $produtos->GetItens());


$smarty->display('produtos_info.tpl');


?>