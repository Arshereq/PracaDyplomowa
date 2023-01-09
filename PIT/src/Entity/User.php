<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Już jest stworzone konto na tym e-mailu, spróbuj innego')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToOne(mappedBy: 'User', targetEntity: "PersonDetail", cascade: ['persist', 'remove'])]
    private ?PersonDetail $Person_detail_id = null;

    #[ORM\OneToOne(mappedBy: 'User_id', targetEntity: "Spouse", cascade: ['persist', 'remove'])]
    private ?Spouse $Spouse_id = null;

    #[ORM\OneToOne(mappedBy: 'User_id', targetEntity: "Children", cascade: ['persist', 'remove'])]
    private ?Children $Children_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPersonDetailId(): ?PersonDetail
    {
        return $this->Person_detail_id;
    }

    public function setPersonDetailId(?PersonDetail $Person_detail_id): self
    {
        // unset the owning side of the relation if necessary
        if ($Person_detail_id === null && $this->Person_detail_id !== null) {
            $this->Person_detail_id->setUser(null);
        }

        // set the owning side of the relation if necessary
        if ($Person_detail_id !== null && $Person_detail_id->getUser() !== $this) {
            $Person_detail_id->setUser($this);
        }

        $this->Person_detail_id = $Person_detail_id;

        return $this;
    }

    public function getSpouseId(): ?Spouse
    {
        return $this->Spouse_id;
    }

    public function setSpouseId(?Spouse $Spouse_id): self
    {
        // unset the owning side of the relation if necessary
        if ($Spouse_id === null && $this->Spouse_id !== null) {
            $this->Spouse_id->setUserId(null);
        }

        // set the owning side of the relation if necessary
        if ($Spouse_id !== null && $Spouse_id->getUserId() !== $this) {
            $Spouse_id->setUserId($this);
        }

        $this->Spouse_id = $Spouse_id;

        return $this;
    }

    public function getChildrenId(): ?Children
    {
        return $this->Children_id;
    }

    public function setChildrenId(?Children $Children_id): self
    {
        // unset the owning side of the relation if necessary
        if ($Children_id === null && $this->Children_id !== null) {
            $this->Children_id->setUserId(null);
        }

        // set the owning side of the relation if necessary
        if ($Children_id !== null && $Children_id->getUserId() !== $this) {
            $Children_id->setUserId($this);
        }

        $this->Children_id = $Children_id;

        return $this;
    }
}
