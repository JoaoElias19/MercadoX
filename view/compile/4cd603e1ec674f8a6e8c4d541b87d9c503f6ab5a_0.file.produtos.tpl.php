<?php
/* Smarty version 3.1.36, created on 2020-05-28 17:48:28
  from 'C:\laragon\www\MercadoX\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecff96cb13c26_08908505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cd603e1ec674f8a6e8c4d541b87d9c503f6ab5a' => 
    array (
      0 => 'C:\\laragon\\www\\MercadoX\\view\\produtos.tpl',
      1 => 1590688106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecff96cb13c26_08908505 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<h4 class="alert alert-danger">Nenhum produto encontrada!!</h4>
<?php }?>

    <section id="paginacao" class="row">
        <center>
            
        </center>
    </section>


            <div class="container">
                <div class="row">
                    <div class="col-md-12  id="">


<div class="card">
    <div id="" class="tab-pane active">
    <div id="" class="card-header bg-secondary text-white">
        <h3>Produtos</h3>
    </div>
        <p></p>

        <section class="p-1 mb-1 bg-light text-dark">
            <div class="container-fluid">
                
                <ul style="list-style: none">
                <div class="row">         
                        
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                        <li class="col-md-3">
                            <div class="card thumbnail" >
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
                            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="Imagem de capa do card">
                                <div class="card-body caption">
                                <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
                                <h3 class="text-center text-danger">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
                                </div>
                            </div><br/>
                        </li>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    

                <section id="paginacao" class="row">
                    <center>
                    1
                     
                    </center>
                </section>

                </div>
                </ul>
            </div>
        </section>
    </div>
</div>
                    
                    </div>
                </div>

            </div>



<?php }
}
