<!-- Tem que editar isso aqui -->


<!-- Esse container me ajudou na estilizacao -->
<div class="container">
<h3>Finalizar Pedido</h3>
<hr>

<!-- Botoes e opcoes de cima -->
<section class="row">

</section>
<br/>
<!-- table listagem de itens -->
<section class="row">
    <center>
        <table class="table table-bordered" style="width: 95%">

            <tr class="text-dark bg-danger">
                <td>Produto</td>
                <td>Valor R$</td>
                <td>X</td>
                <td>Sub Total R$</td>
            </tr>

            {foreach from=$PRO item=P}
            <tr>
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


    <div class="">
        <h4>Formas de pagamento</h4>
    </div>

    <!-- 

            A aqui temos que implemetar as formas de pagamento


    -->



<br/>
<hr/>


<hr/>


</div>