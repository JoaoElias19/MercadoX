<!-- Tem que editar isso aqui -->


<!-- Esse container me ajudou na estilizacao -->
<div class="container">
<h3>Meu Carrinho</h3>
<hr>

<!-- Botoes e opcoes de cima -->
<section class="row">
    <div class="col-md-4">
        <a href="{$PAG_PRODUTOS}" class="btn btn-success" title=""> Compra Mais</a>
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

            {foreach from=$PRO item=P}
            <tr>
                <td><img src="{$P.pro_img}" alt="{$P.pro_nome}"></td>
                <td>{$P.pro_nome}</td>
                <td>{$P.pro_valor}</td>
                <td>{$P.pro_qtd}</td>
                <td>{$P.pro_subTotal}</td>
                <td>
                    <!-- Este form trata os produtos do carrinho -->
                    <!-- E importante que ele exista -->
                    <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                        <input type="hidden" name="pro_id" value="{$P.pro_id}">
                        <input type="hidden" name="acao" value="del">
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-minus"></i>
                        </button>
                    </form>
                </td>
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

    <!-- Botao de limpar -->
    <div class="col-md-4">
        <!-- Este form trata do botao limpar o carrinho -->
        <!-- E importante que ele exista -->
        <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
            <input type="hidden" name="acao" value="limpar">
            <input type="hidden" name="pro_id" value="{$P.pro_id}">
            <button class="btn btn-danger btn-block">
            <i class="fa fa-trash"></i> Limpar Tudo
            </button>
        </form>
    </div>

</section>
<br/>
<hr/>

<!-- Botao Finalizar -->

<form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
<button class="btn bg-success text-white btn-md" type="submit" >
    <i class=""></i>Comfirmar Pedido
</button>
</form>

<hr/>


</div>