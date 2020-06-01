<?php
/* Smarty version 3.1.36, created on 2020-06-01 06:33:56
  from 'C:\xampp\htdocs\MercadoX\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed485344638b4_95756679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1628a73887eb02e533f6e4ba42fe1d9e5986b1af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MercadoX\\view\\contato.tpl',
      1 => 1590804789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed485344638b4_95756679 (Smarty_Internal_Template $_smarty_tpl) {
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
