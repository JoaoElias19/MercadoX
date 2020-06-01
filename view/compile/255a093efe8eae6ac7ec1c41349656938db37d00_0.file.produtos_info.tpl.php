<?php
/* Smarty version 3.1.36, created on 2020-06-01 02:18:25
  from 'C:\xampp\htdocs\MercadoX\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed44951827294_72680386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '255a093efe8eae6ac7ec1c41349656938db37d00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MercadoX\\view\\produtos_info.tpl',
      1 => 1590970426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed44951827294_72680386 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

<!--
    <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>

    <hr>
    <div class="row">

                <div>
            <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="">
        </div>

                <div class="col-md-6 thumbnail">
            <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
        </div>

                <div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/ppp.png" alt="">
            <hr>

            <div class="col-md-6">
                <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
            </div>

        </div>

        <div class="col-md-6">
            <form name="carrinho" method="post" action="">
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <input type="hidden" name="acao" value="add">
                <button class="btn btn-geral btn-lg">Comprar</button>
            </form>
        </div>
    
    </div>

    <div class="row">
    <hr>
        <h4 class="text-center">Mais imagens</h4>
        <ul style="list-style: nome">
            <li class="col-md-3">
                <img src="" alt="" class="thumbnail">
            </li>
        </ul>

    </div>

        <div class="row">
        <hr>
        <h4 class="text-center">Descricao do produto</h4>
        <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>


    </div>
        <br/>
        <br/>
-->

<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
          <div class="card-header">
            <nav class="header-navigation">
              <a href="#" class="btn btn-link">Voltar para lista</a>

              <div class="btn-group">
                <a href="#" class="btn btn-link btn-share">Compartilhar</a>
              </div>

            </nav>
          </div>
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery">
                <div class="product-gallery-featured">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="">
                </div>
              </div>
              <div class="product-seller-recommended"></div>
            </div>
            <div class="product-payment-details">

              <!-- E necessario ter esse form aqui porque tem o metodo post -->
                <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                  <h4 class="product-title mb-2"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h4>
                  <h2 class="product-price display-4">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h2>
                  <p class="text-success"><i class="fa fa-credit-card"></i> 12x or  5x $ 5.00</p>
                  <p class="mb-0"><i class="fa fa-truck"></i> Entrega para todo o territorio</p>
                  <div class="text-muted mb-2"><small>saiba mais sobre entrega e formas de envio</small></div>

                  <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                  <input type="hidden" name="acao" value="add">
                  <button class="btn btn-primary btn-lg btn-block">Comprar</button>
                </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
        <div class="row">
        <hr>
        <h4 class="text-center">Descricao do produto</h4>
        <br/>
        <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>


<!-- Ajeita isso pf-->
    </div>
        <br/>

    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
