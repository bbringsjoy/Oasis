<?php

namespace App\Model;

use App\Core\Database;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'usuarios')]
class User
{
    #[Column(name: 'id_usuario'), Id, GeneratedValue]
    private int $id;

    #[Column(name: 'nome_completo')]
    private string $name;

    #[Column]
    private string $email;

    #[Column]
    private string $cpf;

    #[Column(name: 'senha')]
    private string $password;

    #[OneToOne(targetEntity: DiariasAtuais::class)]
    #[JoinColumn(name: 'id_atuais', referencedColumnName: 'id_atuais', nullable: true)]
    private ?DiariasAtuais $diariasAtuais = null;

    #[OneToOne(targetEntity: DiariasTotais::class)]
    #[JoinColumn(name: 'id_totais', referencedColumnName: 'id_totais', nullable: true)]
    private ?DiariasTotais $diariasTotais = null;

    public function __construct(string $name, string $email, string $cpf, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->password = $password;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getDiariasAtuais(): ?DiariasAtuais
    {
        return $this->diariasAtuais;
    }

    public function getDiariasTotais(): ?DiariasTotais
    {
        return $this->diariasTotais;
    }
    
    // Métodos para definir as diárias após a criação do usuário
    public function setDiariasAtuais(DiariasAtuais $diariasAtuais): void
    {
        $this->diariasAtuais = $diariasAtuais;
    }
    
    public function setDiariasTotais(DiariasTotais $diariasTotais): void
    {
        $this->diariasTotais = $diariasTotais;
    }

    public function save(): void
    {
        $em = Database::getEntityManager();
        $em->persist($this);
        $em->flush();
    }
    
    public static function findAll(): array
    {
        $em = Database::getEntityManager();
        $repository = $em->getRepository(User::class);
        return $repository->findAll();
    }

    public function validatePassword(string $password): bool
    {
        return $this->password == hash('sha256', $password);
    }
}