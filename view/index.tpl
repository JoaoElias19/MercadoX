<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{$TITULO_SITE}</title>

    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/contatos/contato.css">
    <script src="{$GET_TEMA}/tema/contatos/contato.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- Essa e a index padrao que sera exibida para o usuario -->
    
    <style>
      body{
        font-family: 'Roboto';font-size: 18px;
      }
      .secao-destaque{
        background-color: rgb(0, 153, 255);
       
      }
      .lista-busca{
        background-color: whitesmoke;
        
      }
      .lista{
        background: url({$GET_TEMA}/imgs/sun.jpg);
       }
     
    </style>
</head>
<body>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/script.js"></script>


  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Mano Pipas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="textoNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{$GET_SITE_HOME}"> | 
            <i class="fa fa-home"></i> Inicio |
            <span class="sr-only">(Página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$PAG_PRODUTOS}">
            <i class="fa fa-tags"></i> Produtos |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$PAG_MINHACONTA}">
            <i class="fa fa-user"></i> Minha Conta |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$PAG_CARRINHO}">
            <i class="fa fa-shopping-cart"></i> Carrinho |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$PAG_CONTATO}">
            <i class="fa fa-id-badge"></i> Contato |</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>
  </header>


      <div class="secao-destaque p-5 w-100 text-white">
        <div class="container-fluid">
            <header class="row pt-5 pb-5">
              <div class="col-12 text-center">
                <img class="w-75" src="{$GET_TEMA}/imgs/manopipas.png">    
               </div>
            </header>            
        </div>
      </div>


     <div class="pt-1">
      <div class="container">
        <div class="card-body">
          <h2 class="text-dark text-center">Conheça o que temos disponível.</h2>
        </div>
      </div>
     </div>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-1"> </div>

        <div class="col-md-2"> 
            <nav class="nav nav-pills flex-column">
                <a href="#" class="nav-item nav-link active">
                    <i class="fa fa-list"></i> Categorias
                </a>

                <a href="{$PAG_PRODUTOS}" class="nav-item nav-link btn btn-light">
                    <div class="text-justify"> 
                        <i class="fa fa-chevron-right"></i> Todos
                    </div> 
                </a>

                {foreach from=$CATEGORIAS item=C}

                <a href="{$C.cate_link}" class="nav-item nav-link btn btn-light">
                    <div class="text-justify"> 
                        <i class="fa fa-chevron-right"></i> {$C.cate_nome}
                    </div> 
                </a>

                {/foreach}


            </nav>
        </div>

        {php}
            Rotas::get_Pagina();
        {/php}

    </div>
</div>



    <p></p>      

    <section class="lista p-1 mb-1 bg-light text-dark">


        <div class="container">
          <br>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#home"></a>
            </li>
          </ul>
        </div>

<!--
-->
    </section>



    <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Mano Pipas</h6>
        <p>Loja Virtual de Pipas em Manaus, fundada por João Elias e Derlane Oliveira.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Redes Sociais</h6>
        <p>
          <a href="#!">Facebook</a>
        </p>
        <p>
          <a href="#!">Instagram</a>
        </p>
        <p>
          <a href="#!">Whatsapp</a>
        </p>
        <p>
          <a href="#!">Youtube</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-4 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contatos</h6>
        <p>
          <i class="fa fa-home mr-3"></i> Rua 157 17-A, Santo Antônio, Manaus-AM</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> manotecnico.am@gmail.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 55 (92) 99322-2947</p>
        <p>
          <i class="fa fa-print mr-3"></i> + 55 (92) 3645-2957</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="#">
            <strong> ManoTecnico.com.br</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
    

    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>