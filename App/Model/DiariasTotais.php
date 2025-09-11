<?php

namespace App\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
class DiariasTotais
{
    #[Column, Id, GeneratedValue]
    private int $id_totais;

    #[ManyToOne(targetEntity: Residencia::class)]
    #[JoinColumn(name: 'id_residencias', referencedColumnName: 'id_residencia')]
    private Residencia $residencia;

    public function __construct(Residencia $residencia)
    {
        $this->residencia = $residencia;
    }

    public function getIdTotais(): int
    {
        return $this->id_totais;
    }

    public function getResidencia(): Residencia
    {
        return $this->residencia;
    }
}