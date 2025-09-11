<?php

namespace App\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
class DiariasAtuais
{
    #[Column, Id, GeneratedValue]
    private int $id_atuais;

    #[ManyToOne(targetEntity: Residencia::class)]
    #[JoinColumn(name: 'id_residencias', referencedColumnName: 'id_residencia')]
    private Residencia $residencia;

    public function __construct(Residencia $residencia)
    {
        $this->residencia = $residencia;
    }

    public function getIdAtuais(): int
    {
        return $this->id_atuais;
    }

    public function getResidencia(): Residencia
    {
        return $this->residencia;
    }
}