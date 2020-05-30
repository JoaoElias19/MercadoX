<?php

class Paginacao extends Conexao {

    public $limite, $inicio, $totalpags, $link = array();


    function GetPaginacao($campo, $tabela) {
        $query = "SELECT {$campo} FROM {$tabala}";
        $this->ExecuteSQL($query);
        $total = $this->TotalDados();

        $this->limite = Config::DB_LIMIT_POR_PAG;
        $paginas = ceil($total / $this->$limite); //ceil arredonda pra cima
        $this->totalpags = $paginas;

        //verificacao com Operador Ternario
        $p = (int)isset($_GET['p']) ? $_GET['p'] : 1; 

        //Testar na pratica
        $this->inicio = ($p * $this->limite) - $this->limite;

        for($i = 1; $i <= $paginas; $i++):
            array_push($this->link, $i);

        endfor;

    }
}

?>