<?php

namespace App\Entity;

use App\Repository\PIT37Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PIT37Repository::class)]
class PIT37
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_service_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_contract_revenues = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_income_from_graduate = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_employment_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_pension_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_activities_performed_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_copyright_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_other_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_total_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_employment_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_activities_performed_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_copyright_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_other_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_total_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_employment_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_pension_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_activities_performed_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_copyright_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_other_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_total_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_employment_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_pension_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_activites_performed_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_copyright_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_total_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_employment_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_activities_performed_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_copyright_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_other_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_social_security = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_pit0_deductions = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_health_insurance = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_deduction = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_health_insurance_kid = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_difference_between = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_service_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_contract_revenues = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_income_from_graduate = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_employment_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_pension_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_activities_performed_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_copyright_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_other_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_total_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_employment_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_activities_performed_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_copyright_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_other_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_total_cost_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_employment_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_pension_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_activities_performed_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_copyright_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_other_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_total_advance_payment = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_employment_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_pension_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_activities_performed_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_copyright_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_other_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_total_proceeds = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_employment_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_activities_performed_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_copyright_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_other_loss = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_social_security = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_pit0_deductions = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_health_insurance = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_deduction = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_health_insurance_kid = null;

    #[ORM\Column(nullable: true)]
    private ?float $spouse_difference_between = null;

    #[ORM\Column(nullable: true)]
    private ?float $interest_relief = null;

    #[ORM\Column(nullable: true)]
    private ?float $income_after_deductions = null;

    #[ORM\Column(nullable: true)]
    private ?float $housing_deductions_from_income = null;

    #[ORM\Column(nullable: true)]
    private ?float $basis_for_tax_calculation = null;

    #[ORM\Column(nullable: true)]
    private ?float $calculated_tax = null;

    #[ORM\Column(nullable: true)]
    private ?float $tax_additions = null;

    #[ORM\Column(nullable: true)]
    private ?float $tax_after_deduction = null;

    #[ORM\Column(nullable: true)]
    private ?float $housing_deductions_from_tax = null;

    #[ORM\Column(nullable: true)]
    private ?float $tax_due = null;

    #[ORM\Column(nullable: true)]
    private ?float $difference_between_tax = null;

    #[ORM\Column(nullable: true)]
    private ?float $difference_between_tax_sum = null;

    #[ORM\Column(nullable: true)]
    private ?float $due_difference = null;

    #[ORM\Column(nullable: true)]
    private ?float $conclusive_return = null;

    #[ORM\Column(nullable: true)]
    private ?float $income = null;

    #[ORM\Column(nullable: true)]
    private ?float $krs_number = null;

    #[ORM\Column(nullable: true)]
    private ?float $krs_amount = null;

    #[ORM\ManyToOne(inversedBy: 'pit37')]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    private ?float $user_other_proceeds = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserServiceIncome(): ?float
    {
        return $this->user_service_income;
    }

    public function setUserServiceIncome(?float $user_service_income): self
    {
        $this->user_service_income = $user_service_income;

        return $this;
    }

    public function getUserContractRevenues(): ?float
    {
        return $this->user_contract_revenues;
    }

    public function setUserContractRevenues(?float $user_contract_revenues): self
    {
        $this->user_contract_revenues = $user_contract_revenues;

        return $this;
    }

    public function getUserIncomeFromGraduate(): ?float
    {
        return $this->user_income_from_graduate;
    }

    public function setUserIncomeFromGraduate(?float $user_income_from_graduate): self
    {
        $this->user_income_from_graduate = $user_income_from_graduate;

        return $this;
    }

    public function getUserEmploymentIncome(): ?float
    {
        return $this->user_employment_income;
    }

    public function setUserEmploymentIncome(?float $user_employment_income): self
    {
        $this->user_employment_income = $user_employment_income;

        return $this;
    }

    public function getUserPensionIncome(): ?float
    {
        return $this->user_pension_income;
    }

    public function setUserPensionIncome(?float $user_pension_income): self
    {
        $this->user_pension_income = $user_pension_income;

        return $this;
    }

    public function getUserActivitiesPerformedIncome(): ?float
    {
        return $this->user_activities_performed_income;
    }

    public function setUserActivitiesPerformedIncome(?float $user_activities_performed_income): self
    {
        $this->user_activities_performed_income = $user_activities_performed_income;

        return $this;
    }

    public function getUserCopyrightIncome(): ?float
    {
        return $this->user_copyright_income;
    }

    public function setUserCopyrightIncome(?float $user_copyright_income): self
    {
        $this->user_copyright_income = $user_copyright_income;

        return $this;
    }

    public function getUserOtherIncome(): ?float
    {
        return $this->user_other_income;
    }

    public function setUserOtherIncome(?float $user_other_income): self
    {
        $this->user_other_income = $user_other_income;

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

    public function getUserEmploymentCostIncome(): ?float
    {
        return $this->user_employment_cost_income;
    }

    public function setUserEmploymentCostIncome(?float $user_employment_cost_income): self
    {
        $this->user_employment_cost_income = $user_employment_cost_income;

        return $this;
    }

    public function getUserActivitiesPerformedCostIncome(): ?float
    {
        return $this->user_activities_performed_cost_income;
    }

    public function setUserActivitiesPerformedCostIncome(?float $user_activities_performed_cost_income): self
    {
        $this->user_activities_performed_cost_income = $user_activities_performed_cost_income;

        return $this;
    }

    public function getUserCopyrightCostIncome(): ?float
    {
        return $this->user_copyright_cost_income;
    }

    public function setUserCopyrightCostIncome(?float $user_copyright_cost_income): self
    {
        $this->user_copyright_cost_income = $user_copyright_cost_income;

        return $this;
    }

    public function getUserOtherCostIncome(): ?float
    {
        return $this->user_other_cost_income;
    }

    public function setUserOtherCostIncome(?float $user_other_cost_income): self
    {
        $this->user_other_cost_income = $user_other_cost_income;

        return $this;
    }

    public function getUserTotalCostIncome(): ?float
    {
        return $this->user_total_cost_income;
    }

    public function setUserTotalCostIncome(?float $user_total_cost_income): self
    {
        $this->user_total_cost_income = $user_total_cost_income;

        return $this;
    }

    public function getUserEmploymentAdvancePayment(): ?float
    {
        return $this->user_employment_advance_payment;
    }

    public function setUserEmploymentAdvancePayment(?float $user_employment_advance_payment): self
    {
        $this->user_employment_advance_payment = $user_employment_advance_payment;

        return $this;
    }

    public function getUserPensionAdvancePayment(): ?float
    {
        return $this->user_pension_advance_payment;
    }

    public function setUserPensionAdvancePayment(?float $user_pension_advance_payment): self
    {
        $this->user_pension_advance_payment = $user_pension_advance_payment;

        return $this;
    }

    public function getUserActivitiesPerformedAdvancePayment(): ?float
    {
        return $this->user_activities_performed_advance_payment;
    }

    public function setUserActivitiesPerformedAdvancePayment(?float $user_activities_performed_advance_payment): self
    {
        $this->user_activities_performed_advance_payment = $user_activities_performed_advance_payment;

        return $this;
    }

    public function getUserCopyrightAdvancePayment(): ?float
    {
        return $this->user_copyright_advance_payment;
    }

    public function setUserCopyrightAdvancePayment(?float $user_copyright_advance_payment): self
    {
        $this->user_copyright_advance_payment = $user_copyright_advance_payment;

        return $this;
    }

    public function getUserOtherAdvancePayment(): ?float
    {
        return $this->user_other_advance_payment;
    }

    public function setUserOtherAdvancePayment(?float $user_other_advance_payment): self
    {
        $this->user_other_advance_payment = $user_other_advance_payment;

        return $this;
    }

    public function getUserTotalAdvancePayment(): ?float
    {
        return $this->user_total_advance_payment;
    }

    public function setUserTotalAdvancePayment(?float $user_total_advance_payment): self
    {
        $this->user_total_advance_payment = $user_total_advance_payment;

        return $this;
    }

    public function getUserEmploymentProceeds(): ?float
    {
        return $this->user_employment_proceeds;
    }

    public function setUserEmploymentProceeds(?float $user_employment_proceeds): self
    {
        $this->user_employment_proceeds = $user_employment_proceeds;

        return $this;
    }

    public function getUserPensionProceeds(): ?float
    {
        return $this->user_pension_proceeds;
    }

    public function setUserPensionProceeds(?float $user_pension_proceeds): self
    {
        $this->user_pension_proceeds = $user_pension_proceeds;

        return $this;
    }

    public function getUserActivitesPerformedProceeds(): ?float
    {
        return $this->user_activites_performed_proceeds;
    }

    public function setUserActivitesPerformedProceeds(?float $user_activites_performed_proceeds): self
    {
        $this->user_activites_performed_proceeds = $user_activites_performed_proceeds;

        return $this;
    }

    public function getUserCopyrightProceeds(): ?float
    {
        return $this->user_copyright_proceeds;
    }

    public function setUserCopyrightProceeds(?float $user_copyright_proceeds): self
    {
        $this->user_copyright_proceeds = $user_copyright_proceeds;

        return $this;
    }

    public function getUserTotalProceeds(): ?float
    {
        return $this->user_total_proceeds;
    }

    public function setUserTotalProceeds(?float $user_total_proceeds): self
    {
        $this->user_total_proceeds = $user_total_proceeds;

        return $this;
    }

    public function getUserEmploymentLoss(): ?float
    {
        return $this->user_employment_loss;
    }

    public function setUserEmploymentLoss(?float $user_employment_loss): self
    {
        $this->user_employment_loss = $user_employment_loss;

        return $this;
    }

    public function getUserActivitiesPerformedLoss(): ?float
    {
        return $this->user_activities_performed_loss;
    }

    public function setUserActivitiesPerformedLoss(?float $user_activities_performed_loss): self
    {
        $this->user_activities_performed_loss = $user_activities_performed_loss;

        return $this;
    }

    public function getUserCopyrightLoss(): ?float
    {
        return $this->user_copyright_loss;
    }

    public function setUserCopyrightLoss(?float $user_copyright_loss): self
    {
        $this->user_copyright_loss = $user_copyright_loss;

        return $this;
    }

    public function getUserOtherLoss(): ?float
    {
        return $this->user_other_loss;
    }

    public function setUserOtherLoss(?float $user_other_loss): self
    {
        $this->user_other_loss = $user_other_loss;

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

    public function getUserPit0Deductions(): ?float
    {
        return $this->user_pit0_deductions;
    }

    public function setUserPit0Deductions(?float $user_pit0_deductions): self
    {
        $this->user_pit0_deductions = $user_pit0_deductions;

        return $this;
    }

    public function getUserHealthInsurance(): ?float
    {
        return $this->user_health_insurance;
    }

    public function setUserHealthInsurance(?float $user_health_insurance): self
    {
        $this->user_health_insurance = $user_health_insurance;

        return $this;
    }

    public function getUserDeduction(): ?float
    {
        return $this->user_deduction;
    }

    public function setUserDeduction(?float $user_deduction): self
    {
        $this->user_deduction = $user_deduction;

        return $this;
    }

    public function getUserHealthInsuranceKid(): ?float
    {
        return $this->user_health_insurance_kid;
    }

    public function setUserHealthInsuranceKid(?float $user_health_insurance_kid): self
    {
        $this->user_health_insurance_kid = $user_health_insurance_kid;

        return $this;
    }

    public function getUserDifferenceBetween(): ?float
    {
        return $this->user_difference_between;
    }

    public function setUserDifferenceBetween(?float $user_difference_between): self
    {
        $this->user_difference_between = $user_difference_between;

        return $this;
    }

    public function getSpouseServiceIncome(): ?float
    {
        return $this->spouse_service_income;
    }

    public function setSpouseServiceIncome(?float $spouse_service_income): self
    {
        $this->spouse_service_income = $spouse_service_income;

        return $this;
    }

    public function getSpouseContractRevenues(): ?float
    {
        return $this->spouse_contract_revenues;
    }

    public function setSpouseContractRevenues(?float $spouse_contract_revenues): self
    {
        $this->spouse_contract_revenues = $spouse_contract_revenues;

        return $this;
    }

    public function getSpouseIncomeFromGraduate(): ?float
    {
        return $this->spouse_income_from_graduate;
    }

    public function setSpouseIncomeFromGraduate(?float $spouse_income_from_graduate): self
    {
        $this->spouse_income_from_graduate = $spouse_income_from_graduate;

        return $this;
    }

    public function getSpouseEmploymentIncome(): ?float
    {
        return $this->spouse_employment_income;
    }

    public function setSpouseEmploymentIncome(?float $spouse_employment_income): self
    {
        $this->spouse_employment_income = $spouse_employment_income;

        return $this;
    }

    public function getSpousePensionIncome(): ?float
    {
        return $this->spouse_pension_income;
    }

    public function setSpousePensionIncome(?float $spouse_pension_income): self
    {
        $this->spouse_pension_income = $spouse_pension_income;

        return $this;
    }

    public function getSpouseActivitiesPerformedIncome(): ?float
    {
        return $this->spouse_activities_performed_income;
    }

    public function setSpouseActivitiesPerformedIncome(?float $spouse_activities_performed_income): self
    {
        $this->spouse_activities_performed_income = $spouse_activities_performed_income;

        return $this;
    }

    public function getSpouseCopyrightIncome(): ?float
    {
        return $this->spouse_copyright_income;
    }

    public function setSpouseCopyrightIncome(?float $spouse_copyright_income): self
    {
        $this->spouse_copyright_income = $spouse_copyright_income;

        return $this;
    }

    public function getSpouseOtherIncome(): ?float
    {
        return $this->spouse_other_income;
    }

    public function setSpouseOtherIncome(?float $spouse_other_income): self
    {
        $this->spouse_other_income = $spouse_other_income;

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

    public function getSpouseEmploymentCostIncome(): ?float
    {
        return $this->spouse_employment_cost_income;
    }

    public function setSpouseEmploymentCostIncome(?float $spouse_employment_cost_income): self
    {
        $this->spouse_employment_cost_income = $spouse_employment_cost_income;

        return $this;
    }

    public function getSpouseActivitiesPerformedCostIncome(): ?float
    {
        return $this->spouse_activities_performed_cost_income;
    }

    public function setSpouseActivitiesPerformedCostIncome(?float $spouse_activities_performed_cost_income): self
    {
        $this->spouse_activities_performed_cost_income = $spouse_activities_performed_cost_income;

        return $this;
    }

    public function getSpouseCopyrightCostIncome(): ?float
    {
        return $this->spouse_copyright_cost_income;
    }

    public function setSpouseCopyrightCostIncome(?float $spouse_copyright_cost_income): self
    {
        $this->spouse_copyright_cost_income = $spouse_copyright_cost_income;

        return $this;
    }

    public function getSpouseOtherCostIncome(): ?float
    {
        return $this->spouse_other_cost_income;
    }

    public function setSpouseOtherCostIncome(?float $spouse_other_cost_income): self
    {
        $this->spouse_other_cost_income = $spouse_other_cost_income;

        return $this;
    }

    public function getSpouseTotalCostIncome(): ?float
    {
        return $this->spouse_total_cost_income;
    }

    public function setSpouseTotalCostIncome(?float $spouse_total_cost_income): self
    {
        $this->spouse_total_cost_income = $spouse_total_cost_income;

        return $this;
    }

    public function getSpouseEmploymentAdvancePayment(): ?float
    {
        return $this->spouse_employment_advance_payment;
    }

    public function setSpouseEmploymentAdvancePayment(?float $spouse_employment_advance_payment): self
    {
        $this->spouse_employment_advance_payment = $spouse_employment_advance_payment;

        return $this;
    }

    public function getSpousePensionAdvancePayment(): ?float
    {
        return $this->spouse_pension_advance_payment;
    }

    public function setSpousePensionAdvancePayment(?float $spouse_pension_advance_payment): self
    {
        $this->spouse_pension_advance_payment = $spouse_pension_advance_payment;

        return $this;
    }

    public function getSpouseActivitiesPerformedAdvancePayment(): ?float
    {
        return $this->spouse_activities_performed_advance_payment;
    }

    public function setSpouseActivitiesPerformedAdvancePayment(?float $spouse_activities_performed_advance_payment): self
    {
        $this->spouse_activities_performed_advance_payment = $spouse_activities_performed_advance_payment;

        return $this;
    }

    public function getSpouseCopyrightAdvancePayment(): ?float
    {
        return $this->spouse_copyright_advance_payment;
    }

    public function setSpouseCopyrightAdvancePayment(?float $spouse_copyright_advance_payment): self
    {
        $this->spouse_copyright_advance_payment = $spouse_copyright_advance_payment;

        return $this;
    }

    public function getSpouseOtherAdvancePayment(): ?float
    {
        return $this->spouse_other_advance_payment;
    }

    public function setSpouseOtherAdvancePayment(?float $spouse_other_advance_payment): self
    {
        $this->spouse_other_advance_payment = $spouse_other_advance_payment;

        return $this;
    }

    public function getSpouseTotalAdvancePayment(): ?float
    {
        return $this->spouse_total_advance_payment;
    }

    public function setSpouseTotalAdvancePayment(?float $spouse_total_advance_payment): self
    {
        $this->spouse_total_advance_payment = $spouse_total_advance_payment;

        return $this;
    }

    public function getSpouseEmploymentProceeds(): ?float
    {
        return $this->spouse_employment_proceeds;
    }

    public function setSpouseEmploymentProceeds(?float $spouse_employment_proceeds): self
    {
        $this->spouse_employment_proceeds = $spouse_employment_proceeds;

        return $this;
    }

    public function getSpousePensionProceeds(): ?float
    {
        return $this->spouse_pension_proceeds;
    }

    public function setSpousePensionProceeds(?float $spouse_pension_proceeds): self
    {
        $this->spouse_pension_proceeds = $spouse_pension_proceeds;

        return $this;
    }

    public function getSpouseActivitiesPerformedProceeds(): ?float
    {
        return $this->spouse_activities_performed_proceeds;
    }

    public function setSpouseActivitiesPerformedProceeds(?float $spouse_activities_performed_proceeds): self
    {
        $this->spouse_activities_performed_proceeds = $spouse_activities_performed_proceeds;

        return $this;
    }

    public function getSpouseCopyrightProceeds(): ?float
    {
        return $this->spouse_copyright_proceeds;
    }

    public function setSpouseCopyrightProceeds(?float $spouse_copyright_proceeds): self
    {
        $this->spouse_copyright_proceeds = $spouse_copyright_proceeds;

        return $this;
    }

    public function getSpouseOtherProceeds(): ?float
    {
        return $this->spouse_other_proceeds;
    }

    public function setSpouseOtherProceeds(?float $spouse_other_proceeds): self
    {
        $this->spouse_other_proceeds = $spouse_other_proceeds;

        return $this;
    }

    public function getSpouseTotalProceeds(): ?float
    {
        return $this->spouse_total_proceeds;
    }

    public function setSpouseTotalProceeds(?float $spouse_total_proceeds): self
    {
        $this->spouse_total_proceeds = $spouse_total_proceeds;

        return $this;
    }

    public function getSpouseEmploymentLoss(): ?float
    {
        return $this->spouse_employment_loss;
    }

    public function setSpouseEmploymentLoss(?float $spouse_employment_loss): self
    {
        $this->spouse_employment_loss = $spouse_employment_loss;

        return $this;
    }

    public function getSpouseActivitiesPerformedLoss(): ?float
    {
        return $this->spouse_activities_performed_loss;
    }

    public function setSpouseActivitiesPerformedLoss(?float $spouse_activities_performed_loss): self
    {
        $this->spouse_activities_performed_loss = $spouse_activities_performed_loss;

        return $this;
    }

    public function getSpouseCopyrightLoss(): ?float
    {
        return $this->spouse_copyright_loss;
    }

    public function setSpouseCopyrightLoss(?float $spouse_copyright_loss): self
    {
        $this->spouse_copyright_loss = $spouse_copyright_loss;

        return $this;
    }

    public function getSpouseOtherLoss(): ?float
    {
        return $this->spouse_other_loss;
    }

    public function setSpouseOtherLoss(?float $spouse_other_loss): self
    {
        $this->spouse_other_loss = $spouse_other_loss;

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

    public function getSpousePit0Deductions(): ?float
    {
        return $this->spouse_pit0_deductions;
    }

    public function setSpousePit0Deductions(?float $spouse_pit0_deductions): self
    {
        $this->spouse_pit0_deductions = $spouse_pit0_deductions;

        return $this;
    }

    public function getSpouseHealthInsurance(): ?float
    {
        return $this->spouse_health_insurance;
    }

    public function setSpouseHealthInsurance(?float $spouse_health_insurance): self
    {
        $this->spouse_health_insurance = $spouse_health_insurance;

        return $this;
    }

    public function getSpouseDeduction(): ?float
    {
        return $this->spouse_deduction;
    }

    public function setSpouseDeduction(?float $spouse_deduction): self
    {
        $this->spouse_deduction = $spouse_deduction;

        return $this;
    }

    public function getSpouseHealthInsuranceKid(): ?float
    {
        return $this->spouse_health_insurance_kid;
    }

    public function setSpouseHealthInsuranceKid(?float $spouse_health_insurance_kid): self
    {
        $this->spouse_health_insurance_kid = $spouse_health_insurance_kid;

        return $this;
    }

    public function getSpouseDifferenceBetween(): ?float
    {
        return $this->spouse_difference_between;
    }

    public function setSpouseDifferenceBetween(?float $spouse_difference_between): self
    {
        $this->spouse_difference_between = $spouse_difference_between;

        return $this;
    }

    public function getInterestRelief(): ?float
    {
        return $this->interest_relief;
    }

    public function setInterestRelief(?float $interest_relief): self
    {
        $this->interest_relief = $interest_relief;

        return $this;
    }

    public function getIncomeAfterDeductions(): ?float
    {
        return $this->income_after_deductions;
    }

    public function setIncomeAfterDeductions(?float $income_after_deductions): self
    {
        $this->income_after_deductions = $income_after_deductions;

        return $this;
    }

    public function getHousingDeductionsFromIncome(): ?float
    {
        return $this->housing_deductions_from_income;
    }

    public function setHousingDeductionsFromIncome(?float $housing_deductions_from_income): self
    {
        $this->housing_deductions_from_income = $housing_deductions_from_income;

        return $this;
    }

    public function getBasisForTaxCalculation(): ?float
    {
        return $this->basis_for_tax_calculation;
    }

    public function setBasisForTaxCalculation(?float $basis_for_tax_calculation): self
    {
        $this->basis_for_tax_calculation = $basis_for_tax_calculation;

        return $this;
    }

    public function getCalculatedTax(): ?float
    {
        return $this->calculated_tax;
    }

    public function setCalculatedTax(?float $calculated_tax): self
    {
        $this->calculated_tax = $calculated_tax;

        return $this;
    }

    public function getTaxAdditions(): ?float
    {
        return $this->tax_additions;
    }

    public function setTaxAdditions(?float $tax_additions): self
    {
        $this->tax_additions = $tax_additions;

        return $this;
    }

    public function getTaxAfterDeduction(): ?float
    {
        return $this->tax_after_deduction;
    }

    public function setTaxAfterDeduction(?float $tax_after_deduction): self
    {
        $this->tax_after_deduction = $tax_after_deduction;

        return $this;
    }

    public function getHousingDeductionsFromTax(): ?float
    {
        return $this->housing_deductions_from_tax;
    }

    public function setHousingDeductionsFromTax(?float $housing_deductions_from_tax): self
    {
        $this->housing_deductions_from_tax = $housing_deductions_from_tax;

        return $this;
    }

    public function getTaxDue(): ?float
    {
        return $this->tax_due;
    }

    public function setTaxDue(?float $tax_due): self
    {
        $this->tax_due = $tax_due;

        return $this;
    }

    public function getDifferenceBetweenTax(): ?float
    {
        return $this->difference_between_tax;
    }

    public function setDifferenceBetweenTax(?float $difference_between_tax): self
    {
        $this->difference_between_tax = $difference_between_tax;

        return $this;
    }

    public function getDifferenceBetweenTaxSum(): ?float
    {
        return $this->difference_between_tax_sum;
    }

    public function setDifferenceBetweenTaxSum(?float $difference_between_tax_sum): self
    {
        $this->difference_between_tax_sum = $difference_between_tax_sum;

        return $this;
    }

    public function getDueDifference(): ?float
    {
        return $this->due_difference;
    }

    public function setDueDifference(?float $due_difference): self
    {
        $this->due_difference = $due_difference;

        return $this;
    }

    public function getConclusiveReturn(): ?float
    {
        return $this->conclusive_return;
    }

    public function setConclusiveReturn(?float $conclusive_return): self
    {
        $this->conclusive_return = $conclusive_return;

        return $this;
    }

    public function getIncome(): ?float
    {
        return $this->income;
    }

    public function setIncome(?float $income): self
    {
        $this->income = $income;

        return $this;
    }

    public function getKrsNumber(): ?float
    {
        return $this->krs_number;
    }

    public function setKrsNumber(?float $krs_number): self
    {
        $this->krs_number = $krs_number;

        return $this;
    }

    public function getKrsAmount(): ?float
    {
        return $this->krs_amount;
    }

    public function setKrsAmount(?float $krs_amount): self
    {
        $this->krs_amount = $krs_amount;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getUserOtherProceeds(): ?float
    {
        return $this->user_other_proceeds;
    }

    public function setUserOtherProceeds(?float $user_other_proceeds): self
    {
        $this->user_other_proceeds = $user_other_proceeds;

        return $this;
    }
}
