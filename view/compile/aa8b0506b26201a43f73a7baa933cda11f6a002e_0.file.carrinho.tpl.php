<?php
/* Smarty version 3.1.36, created on 2020-06-01 02:18:30
  from 'C:\xampp\htdocs\MercadoX\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed449562a4a92_39439951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8b0506b26201a43f73a7baa933cda11f6a002e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MercadoX\\view\\carrinho.tpl',
      1 => 1590970426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed449562a4a92_39439951 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Tem que editar isso aqui -->


<!-- Esse container me ajudou na estilizacao -->
<div class="container">
<h3>Meu Carrinho</h3>
<hr>

<!-- Botoes e opcoes de cima -->
<section class="row">
    <div class="col-md-4">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-success" title=""> Compra Mais</a>
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-right">

    </div>

</section>
<br/>
<!-- table listagem de itens -->
<section class="row">
    <center>
        <table class="table table-bordered" style="width: 95%">

            <tr class="text-dark bg-danger">
                <td></td>
                <td>Produto</td>
                <td>Valor R$</td>
                <td>X</td>
                <td>Sub Total R$</td>
                <td></td>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <tr>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                <td>
                    <!-- Este form trata os produtos do carrinho -->
                    <!-- E importante que ele exista -->
                    <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                        <input type="hidden" name="acao" value="del">
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-minus"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </center>
</section><!-- fim da listagem de itens -->

<!-- Botao de baixo e valor total -->
<section class="row" id="total">

    <div class="col-md-4 text-right">
    </div>
    <div class="col-md-4 text-right text-danger bg-warning">
        <h4> Total: R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h4>
    </div>

    <!-- Botao de limpar -->
    <div class="col-md-4">
        <!-- Este form trata do botao limpar o carrinho -->
        <!-- E importante que ele exista -->
        <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
            <input type="hidden" name="acao" value="limpar">
            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
            <button class="btn btn-danger btn-block">
            <i class="fa fa-trash"></i> Limpar Tudo
            </button>
        </form>
    </div>

</section>
<br/>
<hr/>

<!-- Botao Finalizar -->

<form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
<button class="btn bg-success text-white btn-md" type="submit" >
    <i class=""></i>Comfirmar Pedido
</button>
</form>

<hr/>


</div><?php }
}
