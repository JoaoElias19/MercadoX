<?php

class Paginacao extends Conexao {

    public $limite, $inicio, $totalpags, $link = array();


    function GetPaginacao($campo, $tabela) {
        $query = "SELECT {$campo} FROM {$tabela}";
        $this->ExecuteSQL($query);
        $total = $this->TotalDados();

        $this->limite = Config::DB_LIMIT_POR_PAG;
        $paginas = ceil($total / $this->limite); //ceil arredonda pra cima
        $this->totalpags = $paginas;

        //verificacao com Operador Ternario
        $p = (int)isset($_GET['p']) ? $_GET['p'] : 1; 

        //Este if direcional para a ultima pagina existente
        if($p > $paginas) {
            $p = $paginas;
        }

        //Testar na pratica
        $this->inicio = ($p * $this->limite) - $this->limite;

        //Limite para mostar o numero de paginas 
        $tolerancia = 4;
        $mostrar = $p + $tolerancia;
        if($mostrar > $paginas) {
            $mostrar = $paginas;
        }

        for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
            if($i < 1) {
                $i = 1;
            }
            array_push($this->link, $i);

        endfor;

    }
}

?>