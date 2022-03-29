<?php

    require_once "./pessoa.php";

    class Cliente extends Pessoa{

        private $telefone;
        private $telefone_residencial;

        function __construct($nome, $telefone, $telefone_residencial=null){
            parent::__construct($nome); // chama o nome do construct PAI!
            $this->telefone = $telefone;
            $this->telefone_residencial = $telefone_residencial;
        }
    }
?>