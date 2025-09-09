<?php

namespace App\Model;
use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;

Class Post
{
    #[Column, Id, GeneratedValue]
    private int $id;
    #[Column, ManyToOne]
    private User $user;
    #[Column]
    private string $content;
    #[Column]
    private DateTime $postDate;

    public function __construct(int $id, User $user, string $content, DateTime $postDate){$this->id = $id;$this->user = $user;$this->content = $content;$this->postDate = $postDate;}
	public function getId(): int {return $this->id;}

	public function getUser(): User {return $this->user;}

	public function getContent(): string {return $this->content;}

	public function getPostDate(): DateTime {return $this->postDate;}

    public function getPostAge(): int
    {
        $today = new DateTime();
        $interval = $this->postDate->diff($today);
        return $interval->d;
    }
	
}

?>