<?php

namespace App\Models;

// obs.: é preciso rodar o comando composer dumpautoload -o para optimizar o autoload

class Usuario
{
    public $nome;
    public $email;
    public $conta;
    public $senha;

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setConta($valor)
    {
        $this->conta = $valor;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function setSenha($valor)
    {
        $this->senha = $valor;
        $this->hash($this->senha);
    }

    public function getSenha()
    {
        return $this->senha;
    }

    private function hash($senha)
    {
        $this->senha = sha1($senha);
    }

}
