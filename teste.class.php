<?php
//importação
require_once("pessoa.class.php");

class Teste{
     //objeto pessoa com visibilidade privada
    private $pessoa;

    public function __construct(){
        //objeto chamado pessoa recebe a classe pessoa
        $pessoa = new Pessoa();
        //passar um valor para o método setNome
        $pessoa->setNome($_POST['nome']."<br>");
        //imprimir o valor do método getNome
        echo $pessoa->getNome();
           //passar um valor para o método setEndereço
        $pessoa->setEndereco($_POST['endereco']."<br>");
         //imprimir o valor do método getEndereço
        echo $pessoa->getEndereco();
           //passar um valor para o método setBairro
        $pessoa->setBairro($_POST['bairro']."<br>");
         //imprimir o valor do método getBairro
        echo $pessoa->getBairro();
          //passar um valor para o método setCep
        $pessoa->setCep($_POST['cep']."<br>");
         //imprimir o valor do método getCep
        echo $pessoa->getCep();
          //passar um valor para o método setCidade
        $pessoa->setCidade($_POST['cidade']."<br>");
         //imprimir o valor do método getCidade
        echo $pessoa->getCidade();
           //passar um valor para o método setEstado
        $pessoa->setEstado($_POST['estado']."<br>");
         //imprimir o valor do método getEstado
        echo $pessoa->getEstado();
    }
    //instancia
}new teste();

?>