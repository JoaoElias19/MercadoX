

{if $PRO_TOTAL < 1}
<h4 class="alert alert-danger">Nenhum produto encontrada!!</h4>
{/if}


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
                        
                    {foreach from=$PRO item=P}
                        <li class="col-md-3">
                            <div class="card thumbnail" >
                            <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
                            <img class="card-img-top" src="{$P.pro_img}" alt="Imagem de capa do card">
                                <div class="card-body caption">
                                <h4 class="text-center">{$P.pro_nome}</h4>
                                <h3 class="text-center text-danger">R$ {$P.pro_valor}</h3>
                                </div>
                            </div><br/>
                        </li>

                    {/foreach}
                </div>
                </ul>
            </div>
        </section>

<!-- Os a estilizacao esta em model/Conexao.class.php -->
        <section id="paginacao" class="row justify-content-md-center">
            <div class="">
                {$PAGINAS} 
            </div>
        </section>
    </div>
</div>
                    </div>
                </div>

            </div>