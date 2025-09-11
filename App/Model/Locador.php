<?php

namespace App\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
class Locador
{
    #[Column, Id, GeneratedValue]
    private int $id_locador;

    #[Column(name: 'nome_locador')]
    private string $nomeLocador;

    #[Column(name: 'email_locador')]
    private string $emailLocador;

    #[OneToOne(targetEntity: DiariasAtuais::class)]
    #[JoinColumn(name: 'id_atuais', referencedColumnName: 'id_atuais')]
    private DiariasAtuais $diariasAtuais;

    #[OneToOne(targetEntity: DiariasTotais::class)]
    #[JoinColumn(name: 'id_totais', referencedColumnName: 'id_totais')]
    private DiariasTotais $diariasTotais;

    #[OneToOne(targetEntity: Residencia::class)]
    #[JoinColumn(name: 'id_residencia', referencedColumnName: 'id_residencia')]
    private Residencia $residencia;

    public function __construct(string $nomeLocador, string $emailLocador, DiariasAtuais $diariasAtuais, DiariasTotais $diariasTotais, Residencia $residencia)
    {
        $this->nomeLocador = $nomeLocador;
        $this->emailLocador = $emailLocador;
        $this->diariasAtuais = $diariasAtuais;
        $this->diariasTotais = $diariasTotais;
        $this->residencia = $residencia;
    }

    public function getIdLocador(): int
    {
        return $this->id_locador;
    }

    public function getNomeLocador(): string
    {
        return $this->nomeLocador;
    }

    public function getEmailLocador(): string
    {
        return $this->emailLocador;
    }

    public function getDiariasAtuais(): DiariasAtuais
    {
        return $this->diariasAtuais;
    }

    public function getDiariasTotais(): DiariasTotais
    {
        return $this->diariasTotais;
    }

    public function getResidencia(): Residencia
    {
        return $this->residencia;
    }
}