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

    #[ORM\OneToOne(inversedBy: 'Spouse_id', targetEntity: 'PersonDetail', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'person_detail_id_id',referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?PersonDetail $Person_Detail_id = null;

    #[ORM\ManyToOne(inversedBy: 'Spouse')]
    private ?PIT0 $pIT0 = null;

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
        return $this->Person_Detail_id;
    }

    public function setPersonDetailId(?PersonDetail $Person_Detail_id): self
    {
        $this->Person_Detail_id = $Person_Detail_id;

        return $this;
    }

    public function getPIT0(): ?PIT0
    {
        return $this->pIT0;
    }

    public function setPIT0(?PIT0 $pIT0): self
    {
        $this->pIT0 = $pIT0;

        return $this;
    }

}
