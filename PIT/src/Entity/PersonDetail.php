<?php

namespace App\Entity;

use App\Repository\PersonDetailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonDetailRepository::class)]
class PersonDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Surname = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $birth_date = null;

    #[ORM\Column]
    private ?int $PESEL = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Country = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Voivodeship = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $County = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commune = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Street = null;

    #[ORM\Column(nullable: true)]
    private ?int $House_number = null;

    #[ORM\Column(nullable: true)]
    private ?int $Apartment_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Town = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Zip_code = null;

    #[ORM\OneToOne(inversedBy: 'Person_detail_id', cascade: ['persist', 'remove'])]
    private ?User $User = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function setSurname(string $Surname): self
    {
        $this->Surname = $Surname;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(?\DateTimeInterface $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getPESEL(): ?int
    {
        return $this->PESEL;
    }

    public function setPESEL(int $PESEL): self
    {
        $this->PESEL = $PESEL;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(?string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getVoivodeship(): ?string
    {
        return $this->Voivodeship;
    }

    public function setVoivodeship(?string $Voivodeship): self
    {
        $this->Voivodeship = $Voivodeship;

        return $this;
    }

    public function getCounty(): ?string
    {
        return $this->County;
    }

    public function setCounty(?string $County): self
    {
        $this->County = $County;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->Commune;
    }

    public function setCommune(?string $Commune): self
    {
        $this->Commune = $Commune;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->Street;
    }

    public function setStreet(?string $Street): self
    {
        $this->Street = $Street;

        return $this;
    }

    public function getHouseNumber(): ?int
    {
        return $this->House_number;
    }

    public function setHouseNumber(?int $House_number): self
    {
        $this->House_number = $House_number;

        return $this;
    }

    public function getApartmentNumber(): ?int
    {
        return $this->Apartment_number;
    }

    public function setApartmentNumber(?int $Apartment_number): self
    {
        $this->Apartment_number = $Apartment_number;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->Town;
    }

    public function setTown(?string $Town): self
    {
        $this->Town = $Town;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->Zip_code;
    }

    public function setZipCode(?string $Zip_code): self
    {
        $this->Zip_code = $Zip_code;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
