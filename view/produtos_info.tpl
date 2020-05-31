{foreach from=$PRO item=P}

<!--
    <h3 class="text-center">{$P.pro_nome} - Ref: {$P.pro_ref}</h3>

    <hr>
    <div class="row">

        {* div da esquerda imagem do produto *}
        <div>
            <img class="thumbnail" src="{$P.pro_img_g}" alt="">
        </div>

        {*  div da direira info produtos*}
        <div class="col-md-6 thumbnail">
            <img class="thumbnail" src="{$P.pro_img}" alt="">
        </div>

        {*  div da direita info produtos *}
        <div>
            <img src="{$TEMA}/images/ppp.png" alt="">
            <hr>

            <div class="col-md-6">
                <h3 class="text-center preco">R$ {$P.pro_valor}</h3>
            </div>

        </div>

        <div class="col-md-6">
            <form name="carrinho" method="post" action="">
                <input type="hidden" name="pro_id" value="{$P.pro_id}">
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

    {*  descricao do produto    *}
    <div class="row">
        <hr>
        <h4 class="text-center">Descricao do produto</h4>
        {$P.pro_desc}

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
                  <img src="{$P.pro_img_g}" alt="">
                </div>
              </div>
              <div class="product-seller-recommended"></div>
            </div>
            <div class="product-payment-details">

              <!-- E necessario ter esse form aqui porque tem o metodo post -->
                <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                  <h4 class="product-title mb-2">{$P.pro_nome} - Ref: {$P.pro_ref}</h4>
                  <h2 class="product-price display-4">R$ {$P.pro_valor}</h2>
                  <p class="text-success"><i class="fa fa-credit-card"></i> 12x or  5x $ 5.00</p>
                  <p class="mb-0"><i class="fa fa-truck"></i> Entrega para todo o territorio</p>
                  <div class="text-muted mb-2"><small>saiba mais sobre entrega e formas de envio</small></div>

                  <input type="hidden" name="pro_id" value="{$P.pro_id}">
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
    {*  descricao do produto    *}
    <div class="row">
        <hr>
        <h4 class="text-center">Descricao do produto</h4>
        <br/>
        {$P.pro_desc}

<!-- Ajeita isso pf-->
    </div>
        <br/>

    
{/foreach}