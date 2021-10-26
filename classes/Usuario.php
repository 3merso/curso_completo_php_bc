<?php

class Usuario
{
    public $nome;
    public $email;

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

// obs.: é preciso rodar o comando composer dumpautoload -o para optimizar o autoload
