<?php

if(isset($_SESSION['PRO'])) {

    $smarty = new Template();

    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    // Para puxa as imagens
    $smarty->assign('TEMA', Rotas::get_SiteTEMA());


    $smarty->display('pedido_finalizar.tpl');

} else {
	echo '<h4 class="alert alert-danger">Nao possui produtos no carrinho!!</h4>';
    Rotas::Redirecionar(3, Rotas::pag_Produtos());
}
?>