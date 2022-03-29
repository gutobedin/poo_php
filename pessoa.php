<?php 

class Pessoa{
    
    private $nome;
    private $endereco;
    private $peso;
    private $altura;

    function __construct($nome,$endereco=null){
        $this->nome = $nome;
        $this->endereco = $endereco;

    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function IMC(){
        $imc = $this->peso / ($this->altura * $this->altura);
        if ($imc < 18.5){
            $type = "MAGREZA";
        }

        else if($imc >= 18.5 && $imc < 24.9) {
            $type = "NORMAL";
        }

        else if($imc >= 24.9 && $imc <= 30) {
            $type = "SOBREPESO";
        }

        else if($imc > 30) {
            $type = "OBESIDADE";
        }
        return "$type -> $imc";
    }
}

$nome = "Gustavo";
$endereco = "Rua dos pé junto";

$cliente1 = new Pessoa($nome,$endereco);

echo $cliente1->getNome();

$cliente1->setPeso(80);
$cliente1->setAltura(1.90);


echo " => " . $cliente1->IMC();




?>