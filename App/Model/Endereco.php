<?php

namespace App\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Endereco
{
    #[Column, Id, GeneratedValue]
    private int $id_endereco;

    #[Column]
    private string $rua;

    #[Column]
    private string $cep;

    #[Column(name: 'numero_casa')]
    private int $numeroCasa;

    #[Column]
    private string $bairro;

    #[Column]
    private string $cidade;

    #[Column]
    private string $estado;

    public function __construct(string $rua, string $cep, int $numeroCasa, string $bairro, string $cidade, string $estado)
    {
        $this->rua = $rua;
        $this->cep = $cep;
        $this->numeroCasa = $numeroCasa;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    public function getIdEndereco(): int
    {
        return $this->id_endereco;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getNumeroCasa(): int
    {
        return $this->numeroCasa;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }
}