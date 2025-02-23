<?php 

class Exemplo {

    public $nome;
    private $idade;
    static $sexo;

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    } 

}
