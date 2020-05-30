<?php

class Rotas { // Criando URLs amigaveis

    public static $pag;
    // Apontando a pasta do template
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHOME() { // Capturar a pasta HOME do site
        return Config::SITE_URL . '/' . Config::SITE_PASTA; // <- Esta na Config.class.php
    }

    static function get_SiteRAIZ() { // Difinindo a raiz do site
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA; // <- Esta na Config.class.php
    }

    static function get_SiteTEMA() { // Template
        return self::get_SiteHOME() . '/' . self::$pasta_view; 
    }

    static function pag_Carrinho() { // Pagina do Carrinho de compras
        return self::get_SiteHOME() . '/carrinho';
    }

    static function pag_Produtos() { // Pagina do Carrinho de compras
        return self::get_SiteHOME() . '/produtos';
    }

    static function pag_ProdutosInfo() { // Pagina do Carrinho de compras
        return self::get_SiteHOME() . '/produtos_info';
    }

    static function pag_Contato() { // Pagina do Contato
        return self::get_SiteHOME() . '/contato';
    }

    static function pag_MinhaConta() { // Pagina da Conta do Usuario
        return self::get_SiteHOME() . '/minhaconta';
    }

    static function get_ImagePasta() {
        return 'media/images/';
    }

    static function get_ImageURL() {
        return self::get_SiteHOME() . '/' . self::get_ImagePasta();
    }

    static function ImageLink($img, $largura, $altura) {
        $imagem = self::get_ImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";

        return $imagem;
    }

    static function get_Pasta_Controller() {
        return self::$pasta_controller;
    }


    //Verificacao na url
    static function get_Pagina() {
        if(isset($_GET['pag'])) { // se a url chamou isso

            $pagina = $_GET['pag'];
                                //isso cria um array na url 
            self::$pag = explode('/', $pagina); //cria uma separacao na url com a /

/*            echo '<pre>';
            var_dump(self::$pag);
            echo '</pre>';  */

            $pagina = 'controller/' . self::$pag[0] . '.php';
            //$pagina = 'controller/' . $_GET['pag'] . '.php';

            if(file_exists($pagina)) { // se o arquivo da url existir
                include $pagina;
            } else {
                include 'erro.php';
            } 

        } else {
            include 'home.php';
        } 
    }
}

?>