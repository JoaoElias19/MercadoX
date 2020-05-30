<?php
/* Smarty version 3.1.36, created on 2020-05-25 19:44:52
  from 'C:\laragon\www\MercadoX\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecc203465bd14_67426438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2afedb0341576a234dbc3b05c6b33afb7a50351' => 
    array (
      0 => 'C:\\laragon\\www\\MercadoX\\view\\contato.tpl',
      1 => 1590435890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecc203465bd14_67426438 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container fundoBranco">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">
                <form action="envio">
                    <div class="row backForm">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fname">Nome Completo</label>
                                <input type="text" name="txtinputnome" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="txtinputemail" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="subject">Assunto</label>
                                <input type="text" name="assunto" class="form-control" />
                            </div>
                            
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control" name="txtinputarea" rows="10"></textarea>
                            </div>
                            <div class="text-right">
                                <input type="submit" class="btn btn-primary" value="Enviar" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
