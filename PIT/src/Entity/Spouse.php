<?php

namespace App\Entity;

use App\Repository\SpouseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpouseRepository::class)]
class Spouse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'Spouse_id', cascade: ['persist', 'remove'])]
    private ?User $User_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->User_id;
    }

    public function setUserId(?User $User_id): self
    {
        $this->User_id = $User_id;

        return $this;
    }
}
