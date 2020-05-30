<?php

class Template extends SmartyBC {
    function __construct() {
        parent:: __construct();

        $this->setTemplateDir('view/');//setar o Carregamento do template
        $this->setCompileDir('view/compile/');//Isso direciona os arquivos de compilacao 
        $this->setCacheDir('view/cache/');//Isso direciona os caches 
    }
}

?>