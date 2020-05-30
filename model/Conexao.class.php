<?php

//Esse arquivo faz a conexao com o banco
class Conexao extends Config {
    private $host, $user, $password, $banco;

    protected $obj, $itens = array(), $prefix;

    public $paginacao_links; 

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
}

?>