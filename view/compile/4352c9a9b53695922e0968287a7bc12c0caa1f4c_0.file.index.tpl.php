<?php
/* Smarty version 3.1.36, created on 2020-06-01 16:33:33
  from 'C:\xampp\htdocs\MercadoX\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed511bd4ca2b3_78730025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4352c9a9b53695922e0968287a7bc12c0caa1f4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MercadoX\\view\\index.tpl',
      1 => 1591022011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed511bd4ca2b3_78730025 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contato.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contato.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
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
        background: url(<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imgs/sun.jpg);
       }
     
    </style>
</head>
<body>

    <?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/script.js"><?php echo '</script'; ?>
>


  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Mano Pipas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="textoNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"> | 
            <i class="fa fa-home"></i> Inicio |
            <span class="sr-only">(Página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
            <i class="fa fa-tags"></i> Produtos |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">
            <i class="fa fa-user"></i> Minha Conta |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">
            <i class="fa fa-shopping-cart"></i> Carrinho |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">
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
                <img class="w-75" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imgs/manopipas.png">    
               </div>
            </header>            
        </div>
      </div>


     <div class="pt-1 bg-light">
      <div class="container">
        <div class="card-body">
          <h2 class="text-dark text-center">Conheça o que temos disponível.</h2>
        </div>
      </div>
     </div>

<div class="container-fluid">
    
    <div class="row">
  <div class="col-3 col-md-3">
      <nav class="nav nav-pills flex-column">
                <a href="#" class="nav-item nav-link active">
                    <i class="fa fa-list"></i> Categorias
                </a>

                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="nav-item nav-link btn btn-light">
                    <div class="text-justify"> 
                        <i class="fa fa-chevron-right"></i> Todos
                    </div> 
                </a>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
" class="nav-item nav-link btn btn-light">
                    <div class="text-justify"> 
                        <i class="fa fa-chevron-right"></i> <?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>

                    </div> 
                </a>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </nav>
  </div>
  <div class="col-9">
    <?php 
            Rotas::get_Pagina();
        ?>
  </div>
</div>
            

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
        <p>Loja Virtual de Pipas em Manaus, as melhores pipas ao seu alcance.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

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
          <i class="fa fa-home mr-3"></i> Rua 157 17-A, Sto. Antônio, MAO</p>
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
            <strong>JWeb.Desenvolvimento</strong>
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
    

    <?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
