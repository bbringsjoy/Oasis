<?php

namespace App\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
class Residencia
{
    #[Column, Id, GeneratedValue]
    private int $id_residencia;

    #[Column(name: 'tipo_residencia')]
    private string $tipoResidencia;

    #[ManyToOne(targetEntity: Endereco::class)]
    #[JoinColumn(name: 'id_endereco', referencedColumnName: 'id_endereco')]
    private Endereco $endereco;

    public function __construct(string $tipoResidencia, Endereco $endereco)
    {
        $this->tipoResidencia = $tipoResidencia;
        $this->endereco = $endereco;
    }

    public function getIdResidencia(): int
    {
        return $this->id_residencia;
    }

    public function getTipoResidencia(): string
    {
        return $this->tipoResidencia;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
}