<?php

namespace App\Entity;

use App\Repository\PIT0Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PIT0Repository::class)]
class PIT0
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

//    #[ORM\OneToMany(mappedBy: 'pIT0', targetEntity: User::class)]
//    private Collection $User;
//
//    #[ORM\OneToMany(mappedBy: 'pIT0', targetEntity: Spouse::class)]
//    private Collection $Spouse;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_organization = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_religious = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_blood = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_vocational_training = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_reconstruction = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_covid = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_laptop = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_donations_from_separate_laws = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_expanses_rehablitation = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_return_unduly_collected_benefits = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_expanses_internet = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_expanses_thermal_modernization = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_payments_individual_pension = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_other_relief_from_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_total_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_relief_for_training_students = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_social_security = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_relief_for_children = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $user_relief_reffered = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_other_relief_from_tax = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_total_tax = null;

    #[ORM\Column(nullable: true)]
    private ?int $user_children1_PESEL = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $user_children1_surname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $user_children1_name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $user_children1_birth_date = null;

    #[ORM\Column(nullable: true)]
    private ?int $user_children1_number_of_months = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_children1_child_tax_deduction = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_organization = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_religious = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_blood = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_vocational_training = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_reconstruction = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_covid = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_laptop = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_donations_from_separate_laws = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_expanses_rehablitation = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_return_unduly_collected_benefits = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_expanses_internet = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_expanses_thermal_modernization = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_payments_individual_pension = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_other_relief_from_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_total_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_relief_for_training_students = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_social_security = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_relief_for_children = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_relief_reffered = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_total_tax = null;

    #[ORM\Column(nullable: true)]
    private ?int $spouse_children1_pesel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $spouse_children1_surname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $spouse_children1_name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $spouse_children1_birth_date = null;

    #[ORM\Column(nullable: true)]
    private ?int $spouse_children1_number_of_months = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_children_child_tax_deduction = null;

    public function __construct()
    {
        $this->User = new ArrayCollection();
        $this->Spouse = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUser(): Collection
    {
        return $this->User;
    }

    public function addUser(User $user): self
    {
        if (!$this->User->contains($user)) {
            $this->User->add($user);
            $user->setPIT0($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->User->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getPIT0() === $this) {
                $user->setPIT0(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Spouse>
     */
    public function getSpouse(): Collection
    {
        return $this->Spouse;
    }

    public function addSpouse(Spouse $spouse): self
    {
        if (!$this->Spouse->contains($spouse)) {
            $this->Spouse->add($spouse);
            $spouse->setPIT0($this);
        }

        return $this;
    }

    public function removeSpouse(Spouse $spouse): self
    {
        if ($this->Spouse->removeElement($spouse)) {
            // set the owning side to null (unless already changed)
            if ($spouse->getPIT0() === $this) {
                $spouse->setPIT0(null);
            }
        }

        return $this;
    }

    public function getUserDonationsOrganization(): ?float
    {
        return $this->user_donations_organization;
    }

    public function setUserDonationsOrganization(?float $user_donations_organization): self
    {
        $this->user_donations_organization = $user_donations_organization;

        return $this;
    }

    public function getUserDonationsReligious(): ?float
    {
        return $this->user_donations_religious;
    }

    public function setUserDonationsReligious(?float $user_donations_religious): self
    {
        $this->user_donations_religious = $user_donations_religious;

        return $this;
    }

    public function getUserDonationsBlood(): ?float
    {
        return $this->user_donations_blood;
    }

    public function setUserDonationsBlood(?float $user_donations_blood): self
    {
        $this->user_donations_blood = $user_donations_blood;

        return $this;
    }

    public function getUserDonationsVocationalTraining(): ?float
    {
        return $this->user_donations_vocational_training;
    }

    public function setUserDonationsVocationalTraining(?float $user_donations_vocational_training): self
    {
        $this->user_donations_vocational_training = $user_donations_vocational_training;

        return $this;
    }

    public function getUserDonationsReconstruction(): ?float
    {
        return $this->user_donations_reconstruction;
    }

    public function setUserDonationsReconstruction(?float $user_donations_reconstruction): self
    {
        $this->user_donations_reconstruction = $user_donations_reconstruction;

        return $this;
    }

    public function getUserDonationsCovid(): ?float
    {
        return $this->user_donations_covid;
    }

    public function setUserDonationsCovid(?float $user_donations_covid): self
    {
        $this->user_donations_covid = $user_donations_covid;

        return $this;
    }

    public function getUserDonationsLaptop(): ?float
    {
        return $this->user_donations_laptop;
    }

    public function setUserDonationsLaptop(?float $user_donations_laptop): self
    {
        $this->user_donations_laptop = $user_donations_laptop;

        return $this;
    }

    public function getUserDonationsFromSeparateLaws(): ?float
    {
        return $this->user_donations_from_separate_laws;
    }

    public function setUserDonationsFromSeparateLaws(?float $user_donations_from_separate_laws): self
    {
        $this->user_donations_from_separate_laws = $user_donations_from_separate_laws;

        return $this;
    }

    public function getUserExpansesRehablitation(): ?float
    {
        return $this->user_expanses_rehablitation;
    }

    public function setUserExpansesRehablitation(?float $user_expanses_rehablitation): self
    {
        $this->user_expanses_rehablitation = $user_expanses_rehablitation;

        return $this;
    }

    public function getUserReturnUndulyCollectedBenefits(): ?float
    {
        return $this->user_return_unduly_collected_benefits;
    }

    public function setUserReturnUndulyCollectedBenefits(?float $user_return_unduly_collected_benefits): self
    {
        $this->user_return_unduly_collected_benefits = $user_return_unduly_collected_benefits;

        return $this;
    }

    public function getUserExpansesInternet(): ?float
    {
        return $this->user_expanses_internet;
    }

    public function setUserExpansesInternet(?float $user_expanses_internet): self
    {
        $this->user_expanses_internet = $user_expanses_internet;

        return $this;
    }

    public function getUserExpansesThermalModernization(): ?float
    {
        return $this->user_expanses_thermal_modernization;
    }

    public function setUserExpansesThermalModernization(?float $user_expanses_thermal_modernization): self
    {
        $this->user_expanses_thermal_modernization = $user_expanses_thermal_modernization;

        return $this;
    }

    public function getUserPaymentsIndividualPension(): ?float
    {
        return $this->user_payments_individual_pension;
    }

    public function setUserPaymentsIndividualPension(?float $user_payments_individual_pension): self
    {
        $this->user_payments_individual_pension = $user_payments_individual_pension;

        return $this;
    }

    public function getUserOtherReliefFromIncome(): ?float
    {
        return $this->user_other_relief_from_income;
    }

    public function setUserOtherReliefFromIncome(?float $user_other_relief_from_income): self
    {
        $this->user_other_relief_from_income = $user_other_relief_from_income;

        return $this;
    }

    public function getUserTotalIncome(): ?float
    {
        return $this->user_total_income;
    }

    public function setUserTotalIncome(?float $user_total_income): self
    {
        $this->user_total_income = $user_total_income;

        return $this;
    }

    public function getUserReliefForTrainingStudents(): ?float
    {
        return $this->user_relief_for_training_students;
    }

    public function setUserReliefForTrainingStudents(?float $user_relief_for_training_students): self
    {
        $this->user_relief_for_training_students = $user_relief_for_training_students;

        return $this;
    }

    public function getUserSocialSecurity(): ?float
    {
        return $this->user_social_security;
    }

    public function setUserSocialSecurity(?float $user_social_security): self
    {
        $this->user_social_security = $user_social_security;

        return $this;
    }

    public function getUserReliefForChildren(): ?float
    {
        return $this->user_relief_for_children;
    }

    public function setUserReliefForChildren(?float $user_relief_for_children): self
    {
        $this->user_relief_for_children = $user_relief_for_children;

        return $this;
    }

    public function getUserReliefReffered(): ?float
    {
        return $this->user_relief_reffered;
    }

    public function setUserReliefReffered(?float $user_relief_reffered): self
    {
        $this->user_relief_reffered = $user_relief_reffered;

        return $this;
    }

    public function getUserOtherReliefFromTax(): ?float
    {
        return $this->user_other_relief_from_tax;
    }

    public function setUserOtherReliefFromTax(?float $user_other_relief_from_tax): self
    {
        $this->user_other_relief_from_tax = $user_other_relief_from_tax;

        return $this;
    }

    public function getUserTotalTax(): ?float
    {
        return $this->user_total_tax;
    }

    public function setUserTotalTax(?float $user_total_tax): self
    {
        $this->user_total_tax = $user_total_tax;

        return $this;
    }

    public function getUserChildren1PESEL(): ?int
    {
        return $this->user_children1_PESEL;
    }

    public function setUserChildren1PESEL(?int $user_children1_PESEL): self
    {
        $this->user_children1_PESEL = $user_children1_PESEL;

        return $this;
    }

    public function getUserChildren1Surname(): ?string
    {
        return $this->user_children1_surname;
    }

    public function setUserChildren1Surname(?string $user_children1_surname): self
    {
        $this->user_children1_surname = $user_children1_surname;

        return $this;
    }

    public function getUserChildren1Name(): ?string
    {
        return $this->user_children1_name;
    }

    public function setUserChildren1Name(?string $user_children1_name): self
    {
        $this->user_children1_name = $user_children1_name;

        return $this;
    }

    public function getUserChildren1BirthDate(): ?\DateTimeInterface
    {
        return $this->user_children1_birth_date;
    }

    public function setUserChildren1BirthDate(?\DateTimeInterface $user_children1_birth_date): self
    {
        $this->user_children1_birth_date = $user_children1_birth_date;

        return $this;
    }

    public function getUserChildren1NumberOfMonths(): ?int
    {
        return $this->user_children1_number_of_months;
    }

    public function setUserChildren1NumberOfMonths(?int $user_children1_number_of_months): self
    {
        $this->user_children1_number_of_months = $user_children1_number_of_months;

        return $this;
    }

    public function getUserChildren1ChildTaxDeduction(): ?float
    {
        return $this->user_children1_child_tax_deduction;
    }

    public function setUserChildren1ChildTaxDeduction(?float $user_children1_child_tax_deduction): self
    {
        $this->user_children1_child_tax_deduction = $user_children1_child_tax_deduction;

        return $this;
    }

    public function getSpouseDonationsOrganization(): ?float
    {
        return $this->spouse_donations_organization;
    }

    public function setSpouseDonationsOrganization(?float $spouse_donations_organization): self
    {
        $this->spouse_donations_organization = $spouse_donations_organization;

        return $this;
    }

    public function getSpouseDonationsReligious(): ?float
    {
        return $this->spouse_donations_religious;
    }

    public function setSpouseDonationsReligious(?float $spouse_donations_religious): self
    {
        $this->spouse_donations_religious = $spouse_donations_religious;

        return $this;
    }

    public function getSpouseDonationsBlood(): ?float
    {
        return $this->spouse_donations_blood;
    }

    public function setSpouseDonationsBlood(?float $spouse_donations_blood): self
    {
        $this->spouse_donations_blood = $spouse_donations_blood;

        return $this;
    }

    public function getSpouseDonationsVocationalTraining(): ?float
    {
        return $this->spouse_donations_vocational_training;
    }

    public function setSpouseDonationsVocationalTraining(?float $spouse_donations_vocational_training): self
    {
        $this->spouse_donations_vocational_training = $spouse_donations_vocational_training;

        return $this;
    }

    public function getSpouseDonationsReconstruction(): ?float
    {
        return $this->spouse_donations_reconstruction;
    }

    public function setSpouseDonationsReconstruction(?float $spouse_donations_reconstruction): self
    {
        $this->spouse_donations_reconstruction = $spouse_donations_reconstruction;

        return $this;
    }

    public function getSpouseDonationsCovid(): ?float
    {
        return $this->spouse_donations_covid;
    }

    public function setSpouseDonationsCovid(?float $spouse_donations_covid): self
    {
        $this->spouse_donations_covid = $spouse_donations_covid;

        return $this;
    }

    public function getSpouseDonationsLaptop(): ?float
    {
        return $this->spouse_donations_laptop;
    }

    public function setSpouseDonationsLaptop(?float $spouse_donations_laptop): self
    {
        $this->spouse_donations_laptop = $spouse_donations_laptop;

        return $this;
    }

    public function getSpouseDonationsFromSeparateLaws(): ?float
    {
        return $this->spouse_donations_from_separate_laws;
    }

    public function setSpouseDonationsFromSeparateLaws(?float $spouse_donations_from_separate_laws): self
    {
        $this->spouse_donations_from_separate_laws = $spouse_donations_from_separate_laws;

        return $this;
    }

    public function getSpouseExpansesRehablitation(): ?float
    {
        return $this->spouse_expanses_rehablitation;
    }

    public function setSpouseExpansesRehablitation(?float $spouse_expanses_rehablitation): self
    {
        $this->spouse_expanses_rehablitation = $spouse_expanses_rehablitation;

        return $this;
    }

    public function getSpouseReturnUndulyCollectedBenefits(): ?float
    {
        return $this->spouse_return_unduly_collected_benefits;
    }

    public function setSpouseReturnUndulyCollectedBenefits(?float $spouse_return_unduly_collected_benefits): self
    {
        $this->spouse_return_unduly_collected_benefits = $spouse_return_unduly_collected_benefits;

        return $this;
    }

    public function getSpouseExpansesInternet(): ?float
    {
        return $this->spouse_expanses_internet;
    }

    public function setSpouseExpansesInternet(?float $spouse_expanses_internet): self
    {
        $this->spouse_expanses_internet = $spouse_expanses_internet;

        return $this;
    }

    public function getSpouseExpansesThermalModernization(): ?float
    {
        return $this->spouse_expanses_thermal_modernization;
    }

    public function setSpouseExpansesThermalModernization(?float $spouse_expanses_thermal_modernization): self
    {
        $this->spouse_expanses_thermal_modernization = $spouse_expanses_thermal_modernization;

        return $this;
    }

    public function getSpousePaymentsIndividualPension(): ?float
    {
        return $this->spouse_payments_individual_pension;
    }

    public function setSpousePaymentsIndividualPension(?float $spouse_payments_individual_pension): self
    {
        $this->spouse_payments_individual_pension = $spouse_payments_individual_pension;

        return $this;
    }

    public function getSpouseOtherReliefFromIncome(): ?float
    {
        return $this->spouse_other_relief_from_income;
    }

    public function setSpouseOtherReliefFromIncome(?float $spouse_other_relief_from_income): self
    {
        $this->spouse_other_relief_from_income = $spouse_other_relief_from_income;

        return $this;
    }

    public function getSpouseTotalIncome(): ?float
    {
        return $this->spouse_total_income;
    }

    public function setSpouseTotalIncome(?float $spouse_total_income): self
    {
        $this->spouse_total_income = $spouse_total_income;

        return $this;
    }

    public function getSpouseReliefForTrainingStudents(): ?float
    {
        return $this->spouse_relief_for_training_students;
    }

    public function setSpouseReliefForTrainingStudents(?float $spouse_relief_for_training_students): self
    {
        $this->spouse_relief_for_training_students = $spouse_relief_for_training_students;

        return $this;
    }

    public function getSpouseSocialSecurity(): ?float
    {
        return $this->spouse_social_security;
    }

    public function setSpouseSocialSecurity(?float $spouse_social_security): self
    {
        $this->spouse_social_security = $spouse_social_security;

        return $this;
    }

    public function getSpouseReliefForChildren(): ?float
    {
        return $this->spouse_relief_for_children;
    }

    public function setSpouseReliefForChildren(?float $spouse_relief_for_children): self
    {
        $this->spouse_relief_for_children = $spouse_relief_for_children;

        return $this;
    }

    public function getSpouseReliefReffered(): ?float
    {
        return $this->spouse_relief_reffered;
    }

    public function setSpouseReliefReffered(?float $spouse_relief_reffered): self
    {
        $this->spouse_relief_reffered = $spouse_relief_reffered;

        return $this;
    }

    public function getSpouseTotalTax(): ?float
    {
        return $this->spouse_total_tax;
    }

    public function setSpouseTotalTax(?float $spouse_total_tax): self
    {
        $this->spouse_total_tax = $spouse_total_tax;

        return $this;
    }

    public function getSpouseChildren1Pesel(): ?int
    {
        return $this->spouse_children1_pesel;
    }

    public function setSpouseChildren1Pesel(?int $spouse_children1_pesel): self
    {
        $this->spouse_children1_pesel = $spouse_children1_pesel;

        return $this;
    }

    public function getSpouseChildren1Surname(): ?string
    {
        return $this->spouse_children1_surname;
    }

    public function setSpouseChildren1Surname(?string $spouse_children1_surname): self
    {
        $this->spouse_children1_surname = $spouse_children1_surname;

        return $this;
    }

    public function getSpouseChildren1Name(): ?string
    {
        return $this->spouse_children1_name;
    }

    public function setSpouseChildren1Name(?string $spouse_children1_name): self
    {
        $this->spouse_children1_name = $spouse_children1_name;

        return $this;
    }

    public function getSpouseChildren1BirthDate(): ?\DateTimeInterface
    {
        return $this->spouse_children1_birth_date;
    }

    public function setSpouseChildren1BirthDate(?\DateTimeInterface $spouse_children1_birth_date): self
    {
        $this->spouse_children1_birth_date = $spouse_children1_birth_date;

        return $this;
    }

    public function getSpouseChildren1NumberOfMonths(): ?int
    {
        return $this->spouse_children1_number_of_months;
    }

    public function setSpouseChildren1NumberOfMonths(?int $spouse_children1_number_of_months): self
    {
        $this->spouse_children1_number_of_months = $spouse_children1_number_of_months;

        return $this;
    }

    public function getSpouseChildrenChildTaxDeduction(): ?float
    {
        return $this->spouse_children_child_tax_deduction;
    }

    public function setSpouseChildrenChildTaxDeduction(?float $spouse_children_child_tax_deduction): self
    {
        $this->spouse_children_child_tax_deduction = $spouse_children_child_tax_deduction;

        return $this;
    }
}
