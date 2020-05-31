<!-- Tem que editar isso aqui -->


<!-- Esse container me ajudou na estilizacao -->
<div class="container">
<h3>Confirmar Pedido</h3>
<hr>

<!-- Botoes e opcoes de cima -->
<section class="row">
    <div class="col-md-4">
        <a href="{$PAG_CARRINHO}" class="btn btn-success" title="">Voltar para o carrinho</a>
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

            {foreach from=$PRO item=P}
            <tr>
                <td><img src="{$P.pro_img}" alt="{$P.pro_nome}"></td>
                <td>{$P.pro_nome}</td>
                <td>{$P.pro_valor}</td>
                <td>{$P.pro_qtd}</td>
                <td>{$P.pro_subTotal}</td>
            </tr>
            {/foreach}
        </table>
    </center>
</section><!-- fim da listagem de itens -->

<!-- Botao de baixo e valor total -->
<section class="row" id="total">

    <div class="col-md-4 text-right">
    </div>
    <div class="col-md-4 text-right text-danger bg-warning">
        <h4> Total: R$ {$TOTAL}</h4>
    </div>


</section>
<br/>
<hr/>

<!-- Botao Finalizar -->

<form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
<button class="btn bg-success text-white btn-md" type="submit" >
    <i class=""></i>Finalizar Pedido
</button>
</form>

<hr/>


</div>