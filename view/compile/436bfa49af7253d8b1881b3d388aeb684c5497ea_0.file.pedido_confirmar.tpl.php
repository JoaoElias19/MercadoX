<?php
/* Smarty version 3.1.36, created on 2020-06-01 02:18:36
  from 'C:\xampp\htdocs\MercadoX\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed4495c5a7a91_08872245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '436bfa49af7253d8b1881b3d388aeb684c5497ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MercadoX\\view\\pedido_confirmar.tpl',
      1 => 1590970426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed4495c5a7a91_08872245 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Tem que editar isso aqui -->


<!-- Esse container me ajudou na estilizacao -->
<div class="container">
<h3>Confirmar Pedido</h3>
<hr>

<!-- Botoes e opcoes de cima -->
<section class="row">
    <div class="col-md-4">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-success" title="">Voltar para o carrinho</a>
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


</section>
<br/>
<hr/>

<!-- Botao Finalizar -->

<form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
<button class="btn bg-success text-white btn-md" type="submit" >
    <i class=""></i>Finalizar Pedido
</button>
</form>

<hr/>


</div><?php }
}
