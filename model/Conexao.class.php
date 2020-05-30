<?php

//Esse arquivo faz a conexao com o banco
class Conexao extends Config {
    private $host, $user, $password, $banco;

    protected $obj, $itens = array(), $prefix;

    public $paginacao_links, $totalpags, $limite, $inicio; 

    function __construct() {
        $this->host = self::DB_HOST;
        $this->user = self::DB_USER;
        $this->password = self::DB_PASSWORD;
        $this->banco = self::DB_BANCO;
        $this->prefix = self::DB_PREFIX;

        try {

            if($this->Conectar() == null) {
                $this->Conectar();
            }

        } catch (Exception $e) {
            exit($e->getMessage() . '<h2> Erro ao conectar com o banco de dados</h2>');
        }


    }

    private function Conectar() {

        //Para settar o banco para essas configs
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );

        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}", 
                        $this->user, $this->password, $options);
        
        return $link;
    }

    //Executar a consulta no banco
    function ExecuteSQL($query, array $params = NULL) {
        $this->obj = $this->Conectar()->prepare($query);

        if($params > 0) { //count($params) para incluir
            foreach($params as $key =>$value) {
                $this->obj->bindvalue($key, $value);
            }
        }

        return $this->obj->execute();
    }

    //Listar a consulta
    function ListarDados() {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    // Verificar quantos dados existem 
    function TotalDados() {
        return $this->obj->rowCount();
    }

    function GetItens() {
        return $this->itens;
    }


    function PaginacaoLinks($campo, $tabela) {
        $pag = new Paginacao();
        $pag->GetPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;

        $this->totalpags = $pag->totalpags;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;

        if($this->totalpags > 0) {
            return " limit {$inicio}, {$limite}";
        } else {
            return " ";
        }

    }

    // Aqui esta a estilizacao dos botoes de paginacao
    protected function Paginacao($paginas = array()) {
        $pag = '<ul class="pagination">';
        $pag .= '<li class="page-item"><a class="page-link" href="?p=1"> << Inicio</a></li>';

        foreach($paginas as $p):
            $pag .= '<li><a class="page-link" href="?p='.$p.'">'.$p.'</a></li>';
        endforeach;

        $pag .= '<li class="page-item">
                    <a class="page-link" href="?p=' . $this->totalpags .'"> ...'. $this->totalpags .'>> </a>
                </li>';

        $pag .= '</ul>';

        if($this->totalpags > 1) {
            return $pag;
        }
    }

    function ShowPaginacao() {
        return $this->Paginacao($this->paginacao_links);
    }

}

?>