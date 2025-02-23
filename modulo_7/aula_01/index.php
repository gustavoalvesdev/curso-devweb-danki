<?php 

class Pessoa {

    private $nome;
    private $idade;
    private $peso;

    public function __construct() {
        $this->nome = 'Guilherme';
        $this->idade = 23;
        $this->peso = 70;
    }

    public function crescer() {
        echo 'estou crescendo';
    }

    public function comer() {
        echo 'estou comendo';
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function __toString() {
        return "Nome: $this->nome | Idade: $this->idade | Peso: $this->peso"  . PHP_EOL;
    }

}

$pessoa = new Pessoa();

echo $pessoa;

$pessoa->setNome('Gustavo');
$pessoa->setPeso(68.5);
$pessoa->setIdade(33);

echo $pessoa;
