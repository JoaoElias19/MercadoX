<?php

if(!isset($_POST['pro_id']) or $_POST['pro_id'] < 1) {
	echo '<h4 class="alert alert-danger">Erro na operacao!!!</h4>';
	Rotas::Redirecionar(1, Rotas::pag_Carrinho());
	exit();
}


$id = (int)$_POST['pro_id'];

$carrinho = new Carrinho();


//	Tratamento de erro
try {
	$carrinho->CarrinhoADD($id);
} catch (Exception $e) {
	echo '<h4 class="alert alert-danger">Erro na operacao!!!</h4>';
}


Rotas::Redirecionar(1, Rotas::pag_Carrinho());

?>