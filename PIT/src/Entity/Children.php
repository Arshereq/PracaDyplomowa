<?php

namespace App\Entity;

use App\Repository\ChildrenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChildrenRepository::class)]
class Children
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'Children_id', cascade: ['persist', 'remove'])]
    private ?User $User_id = null;

    #[ORM\OneToOne(inversedBy: 'Children_id', cascade: ['persist', 'remove'])]
    private ?PersonDetail $Person_detail_id = null;

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

    public function getPersonDetailId(): ?PersonDetail
    {
        return $this->Person_detail_id;
    }

    public function setPersonDetailId(?PersonDetail $Person_detail_id): self
    {
        $this->Person_detail_id = $Person_detail_id;

        return $this;
    }
}
