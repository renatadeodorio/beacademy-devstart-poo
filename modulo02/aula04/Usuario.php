<?php

class Usuario 
{
  private string $nome;
  private string $email;
  private string $senha;
  private string $cpf;

  public function getNome(): string
  {
    return $this->nome;
  } 

  public function setNome(string $nome): void
  {    
    $this->nome = $nome;
  }
} 
