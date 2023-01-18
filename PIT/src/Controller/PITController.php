<?php

namespace App\Controller;

use App\Entity\PIT0;
use App\Entity\PIT37;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use DateTimeImmutable;

class PITController extends AbstractController
{
    #[Route(path: '/PIT', name: 'Pit_choice')]
    public function PIT_choice(Security $security)
    {
        $user = $security->getUser();
        return $this->render('PIT/Pits.list.html.twig',[
           'user' => $user,
        ]);
    }
    private EntityManagerInterface $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route(path: '/PIT-0', name: 'PIT-0')]
    public function PIT_0(Request $request)
    {

        $user = $this ->getUser();
        $user_dontations_organization = $request -> request->get('user_donations_organization');
        $user_donations_religious = $request ->request->get('user_donations_religious');
        $user_donations_blood = $request->request->get('user_donations_blood');
        $user_donations_vocational_training = $request->request->get('user_donations_vocational_training');
        $user_donations_reconstruction = $request->request->get('user_donations_reconstruction');
        $user_donations_covid = $request->request->get('user_donations_covid');
        $user_donations_laptop = $request->request->get('user_donations_laptop');
        $user_donations_from_separate_laws = $request->request->get('user_donations_from_separate_laws');
        $user_expanse_rehabilitation = $request->request->get('user_expanse_rehabilitation');
        $user_return_unduly_collected_benefits = $request->request->get('user_return_unduly_collected_benefits');
        $user_expanse_internet = $request->request->get('user_expense_internet');
        $user_expanse_thermal_modernization = $request->request->get('user_expense_thermal_modernization');
        $user_payments_individual_pension = $request->request->get('user_payments_individual_pension');
        $user_other_relief_from_income = $request->request->get('user_other_relief_from_income');
        $user_total_income = $request->request->get('user_total_income');
        $user_relief_for_training_students = $request->request->get('user_relief_for_training_students');
        $user_social_security = $request->request->get('user_social_security');
        $user_relief_for_children = $request->request->get('user_relief_for_children');
        $user_relief_reffered = $request->request->get('user_relief_reffered');
        $user_other_relief_from_tax = $request->request->get('user_other_relief_from_tax');
        $user_total_tax = $request->request->get('user_total_tax');
        $user_children1_PESEL = $request->request->get('user_children1_pesel');
        $user_children1_surname = $request->request->get('user_children1_surname');
        $user_children1_name = $request->request->get('user_children_name');
        $user_children1_birth_date = new DateTimeImmutable($request->request->get('user_children1_birth_date'));
        $user_children1_number_of_months = $request->request->get('user_children1_number_of_months');
        $user_children1_child_tax_deduction = $request->request->get('user_children1_child_tax_deduction');

        $spouse_dontations_organization = $request -> request->get('spouse_donations_organization');
        $spouse_donations_religious = $request ->request->get('spouse_donations_religious');
        $spouse_donations_blood = $request->request->get('spouse_donations_blood');
        $spouse_donations_vocational_training = $request->request->get('spouse_donations_vocational_training');
        $spouse_donations_reconstruction = $request->request->get('spouse_donations_reconstruction');
        $spouse_donations_covid = $request->request->get('spouse_donations_covid');
        $spouse_donations_laptop = $request->request->get('spouse_donations_laptop');
        $spouse_donations_from_separate_laws = $request->request->get('spouse_donations_from_separate_laws');
        $spouse_expanse_rehabilitation = $request->request->get('spouse_expanse_rehabilitation');
        $spouse_return_unduly_collected_benefits = $request->request->get('spouse_return_unduly_collected_benefits');
        $spouse_expanse_internet = $request->request->get('spouse_expense_internet');
        $spouse_expanse_thermal_modernization = $request->request->get('spouse_expense_thermal_modernization');
        $spouse_payments_individual_pension = $request->request->get('spouse_payments_individual_pension');
        $spouse_other_relief_from_income = $request->request->get('spouse_other_relief_from_income');
        $spouse_total_income = $request->request->get('spouse_total_income');
        $spouse_relief_for_training_students = $request->request->get('spouse_relief_for_training_students');
        $spouse_social_security = $request->request->get('spouse_social_security');
        $spouse_relief_for_children = $request->request->get('spouse_relief_for_children');
        $spouse_relief_reffered = $request->request->get('spouse_relief_reffered');
        $spouse_other_relief_from_tax = $request->request->get('spouse_other_relief_from_tax');
        $spouse_total_tax = $request->request->get('spouse_total_tax');
        $spouse_children1_pesel = $request->request->get('spouse_children1_pesel');
        $spouse_children1_surname = $request->request->get('spouse_children1_surname');
        $spouse_children1_name = $request->request->get('spouse_children_name');
        $spouse_children1_birth_date = new DateTimeImmutable($request->request->get('spouse_children1_birth_date')) ;
        $spouse_children1_number_of_months = $request->request->get('spouse_children1_number_of_months');
        $spouse_children1_child_tax_deduction = $request->request->get('spouse_children1_child_tax_deduction');

        $pit0 = new PIT0();
        $pit0 ->setUser($user);
        $pit0 -> setUserDonationsOrganization(floatval($user_dontations_organization));
        $pit0 -> setUserDonationsReligious(floatval($user_donations_religious));
        $pit0 -> setUserDonationsBlood(floatval($user_donations_blood));
        $pit0 -> setUserDonationsVocationalTraining(floatval($user_donations_vocational_training));
        $pit0 -> setUserDonationsReconstruction(floatval($user_donations_reconstruction));
        $pit0 -> setUserDonationsCovid(floatval($user_donations_covid));
        $pit0 -> setUserDonationsLaptop(floatval($user_donations_laptop));
        $pit0 -> setUserDonationsFromSeparateLaws(floatval($user_donations_from_separate_laws));
        $pit0 -> setUserExpansesRehablitation(floatval($user_expanse_rehabilitation));
        $pit0 -> setUserReturnUndulyCollectedBenefits(floatval($user_return_unduly_collected_benefits));
        $pit0 -> setUserExpansesInternet(floatval($user_expanse_internet));
        $pit0 -> setUserExpansesThermalModernization(floatval($user_expanse_thermal_modernization));
        $pit0 -> setUserPaymentsIndividualPension(floatval($user_payments_individual_pension));
        $pit0 -> setUserOtherReliefFromIncome(floatval($user_other_relief_from_income));
        $pit0 -> setUserTotalIncome(floatval($user_total_income));
        $pit0 -> setUserReliefForTrainingStudents(floatval($user_relief_for_training_students));
        $pit0 -> setUserSocialSecurity(floatval($user_social_security));
        $pit0 -> setUserReliefForChildren(floatval($user_relief_for_children));
        $pit0 -> setUserReliefReffered(floatval($user_relief_reffered));
        $pit0 -> setUserOtherReliefFromTax(floatval($user_other_relief_from_tax));
        $pit0 -> setUserTotalTax(floatval($user_total_tax));
        $pit0 -> setUserChildren1PESEL(intval($user_children1_PESEL));
        $pit0 -> setUserChildren1Surname($user_children1_surname);
        $pit0 -> setUserChildren1Name($user_children1_name);
        $pit0 -> setUserChildren1BirthDate($user_children1_birth_date);
        $pit0 -> setUserChildren1NumberOfMonths(intval($user_children1_number_of_months));
        $pit0 -> setUserChildren1ChildTaxDeduction(floatval($user_children1_child_tax_deduction));

        $pit0 -> setSpouseDonationsOrganization(floatval($spouse_dontations_organization));
        $pit0 -> setSpouseDonationsReligious(floatval($spouse_donations_religious));
        $pit0 -> setSpouseDonationsBlood(floatval($spouse_donations_blood));
        $pit0 -> setSpouseDonationsVocationalTraining(floatval($spouse_donations_vocational_training));
        $pit0 -> setSpouseDonationsReconstruction(floatval($spouse_donations_reconstruction));
        $pit0 -> setSpouseDonationsCovid(floatval($spouse_donations_covid));
        $pit0 -> setSpouseDonationsLaptop(floatval($spouse_donations_laptop));
        $pit0 -> setSpouseDonationsFromSeparateLaws(floatval($spouse_donations_from_separate_laws));
        $pit0 -> setSpouseExpansesRehablitation(floatval($spouse_expanse_rehabilitation));
        $pit0 -> setSpouseReturnUndulyCollectedBenefits(floatval($spouse_return_unduly_collected_benefits));
        $pit0 -> setSpouseExpansesInternet(floatval($spouse_expanse_internet));
        $pit0 -> setSpouseExpansesThermalModernization(floatval($spouse_expanse_thermal_modernization));
        $pit0 -> setSpousePaymentsIndividualPension(floatval($spouse_payments_individual_pension));
        $pit0 -> setSpouseOtherReliefFromIncome(floatval($spouse_other_relief_from_income));
        $pit0 -> setSpouseTotalIncome(floatval($spouse_total_income));
        $pit0 -> setSpouseReliefForTrainingStudents(floatval($spouse_relief_for_training_students));
        $pit0 -> setSpouseSocialSecurity(floatval($spouse_social_security));
        $pit0 -> setSpouseReliefForChildren(floatval($spouse_relief_for_children));
        $pit0 -> setSpouseReliefReffered(floatval($spouse_relief_reffered));
        $pit0 -> setSpouseOtherReliefFromTax(floatval($spouse_other_relief_from_tax));
        $pit0 -> setSpouseTotalTax(floatval($spouse_total_tax));
        $pit0 -> setSpouseChildren1PESEL(intval($spouse_children1_pesel));
        $pit0 -> setSpouseChildren1Surname($spouse_children1_surname);
        $pit0 -> setSpouseChildren1Name($spouse_children1_name);
        $pit0 -> setSpouseChildren1BirthDate($spouse_children1_birth_date);
        $pit0 -> setSpouseChildren1NumberOfMonths(intval($spouse_children1_number_of_months));
        $pit0 -> setSpouseChildren1ChildTaxDeduction(floatval($spouse_children1_child_tax_deduction));

        $this->entityManager->persist($pit0);
        $this->entityManager->flush();

        return $this->render('PIT/pit0.form.html.twig',[
        ]);

    }

    #[Route(path:'/PIT-37', name:'PIT-37')]
    public function PIT_37(Request $request)
    {
        /*Podatnik*/
        $user = $this->getUser();
        $user_service_income = $request -> request->get('user_service_income');
        $user_contract_revenues = $request->request->get('user_contract_revenues');
        $user_income_from_graduate = $request->request->get('user_income_from_graduate');
        $user_employment_income = $request->request->get('user_employment_income');
        $user_pension_income = $request->request->get('user_pension_income');
        $user_activities_performed_income = $request->request->get('user_activities_performed_income');
        $user_copyright_income = $request->request->get('user_copyright_income');
        $user_other_income = $request->request->get('user_other_income');
        $user_total_income = $request->request->get('user_total_income');
        $user_employment_cost_income = $request->request->get('user_employment_cost_income');

        $user_activities_performed_cost_income = $request->request->get('user_activities_performed_cost_income');
        $user_copyright_cost_income = $request->request->get('user_copyright_cost_income');
        $user_other_cost_income = $request->request->get('user_other_cost_income');
        $user_total_cost_income = $request->request->get('user_total_cost_income');

        $user_employment_advance_payment = $request->request->get('user_employment_advance_payment');
        $user_pension_advance_payment = $request->request->get('user_pension_advance_payment');
        $user_activities_performed_advance_payment = $request->request->get('user_activities_performed_advance_payment');
        $user_copyright_advance_payment = $request->request->get('user_copyright_advance_payment');
        $user_other_advance_payment = $request->request->get('user_other_advance_payment');
        $user_total_advance_payment = $request->request->get('user_total_advance_payment');

        $user_employment_proceeds = $request->request->get('user_employment_proceeds');
        $user_pension_proceeds = $request->request->get('user_pension_proceeds');
        $user_activities_performed_proceeds = $request->request->get('user_activities_performed_proceeds');
        $user_copyright_proceeds = $request->request->get('user_copyright_proceeds');
        $user_other_proceeds = $request->request->get('user_other_proceeds');
        $user_total_proceeds = $request->request->get('user_total_proceeds');

        $user_employment_loss = $request->request->get('user_employment_loss');
        $user_activities_performed_loss = $request->request->get('user_activities_performed_loss');
        $user_copyright_loss = $request->request->get('user_copyright_loss');
        $user_other_loss = $request->request->get('user_other_loss');
        $user_social_security = $request->request->get('user_social_security');
        $user_pit0_deduction = $request->request->get('user_pit0_deduction');
        $user_health_insurance = $request->request->get('user_health_insurance');
        $user_deduction = $request->request->get('user_deduction');
        $user_health_insurance_kid = $request->request->get('user_health_insurance_kid');
        $user_difference_between = $request->request->get('user_difference_between');


        /*MALZONEK*/
        $spouse_service_income = $request -> request->get('spouse_service_income');
        $spouse_contract_revenues = $request->request->get('spouse_contract_revenues');
        $spouse_income_from_graduate = $request->request->get('spouse_income_from_graduate');
        $spouse_employment_income = $request->request->get('spouse_employment_income');
        $spouse_pension_income = $request->request->get('spouse_pension_income');
        $spouse_activities_performed_income = $request->request->get('spouse_activities_performed_income');
        $spouse_copyright_income = $request->request->get('spouse_copyright_income');
        $spouse_other_income = $request->request->get('spouse_other_income');
        $spouse_total_income = $request->request->get('spouse_total_income');
        $spouse_employment_cost_income = $request->request->get('spouse_employment_cost_income');

        $spouse_activities_performed_cost_income = $request->request->get('spouse_activities_performed_cost_income');
        $spouse_copyright_cost_income = $request->request->get('spouse_copyright_cost_income');
        $spouse_other_cost_income = $request->request->get('spouse_other_cost_income');
        $spouse_total_cost_income = $request->request->get('spouse_total_cost_income');

        $spouse_employment_advance_payment = $request->request->get('spouse_employment_advance_payment');
        $spouse_pension_advance_payment = $request->request->get('spouse_pension_advance_payment');
        $spouse_activities_performed_advance_payment = $request->request->get('spouse_activities_performed_advance_payment');
        $spouse_copyright_advance_payment = $request->request->get('spouse_copyright_advance_payment');
        $spouse_other_advance_payment = $request->request->get('spouse_other_advance_payment');
        $spouse_total_advance_payment = $request->request->get('spouse_total_advance_payment');

        $spouse_employment_proceeds = $request->request->get('spouse_employment_proceeds');
        $spouse_pension_proceeds = $request->request->get('spouse_pension_proceeds');
        $spouse_activities_performed_proceeds = $request->request->get('spouse_activities_performed_proceeds');
        $spouse_copyright_proceeds = $request->request->get('spouse_copyright_proceeds');
        $spouse_other_proceeds = $request->request->get('spouse_other_proceeds');
        $spouse_total_proceeds = $request->request->get('spouse_total_proceeds');

        $spouse_employment_loss = $request->request->get('spouse_employment_loss');
        $spouse_activities_performed_loss = $request->request->get('spouse_activities_performed_loss');
        $spouse_copyright_loss = $request->request->get('spouse_copyright_loss');
        $spouse_other_loss = $request->request->get('spouse_other_loss');
        $spouse_social_security = $request->request->get('spouse_social_security');
        $spouse_pit0_deduction = $request->request->get('spouse_pit0_deduction');
        $spouse_health_insurance = $request->request->get('spouse_health_insurance');
        $spouse_deduction = $request->request->get('spouse_deduction');
        $spouse_health_insurance_kid = $request->request->get('spouse_health_insurance_kid');
        $spouse_difference_between = $request->request->get('spouse_difference_between');

        /*CZESC WSPOLNA PODATNIKA I MALZONKA*/
        $interest_relief = $request->request->get('interest_relief');
        $income_after_deductions = $request->request->get('income_after_deductions');
        $housing_deductions_from_income = $request->request->get('housing_deductions_from_income');
        $basis_for_tax_calculation = $request->request->get('basis_for_tax_calculation');
        $calculated_tax = $request->request->get('calculated_tax');
        $tax_additions = $request->request->get('tax_additions');
        $tax_after_deduction = $request->request->get('tax_after_deduction');
        $housing_deductions_from_tax = $request->request->get('housing_deductions_from_tax');
        $tax_due = $request->request->get('tax_due');
        $difference_between_tax = $request->request->get('difference_between_tax');
        $difference_between_tax_sum = $request->request->get('difference_between_tax_sum');
        $due_difference = $request->request->get('due_difference');
        $conclusive_return = $request->request->get('conclusive_return');
        $income = $request->request->get('income');
        $krs_number = $request->request->get('krs_number');
        $krs_amount = $request->request->get('krs_amount');

        /*WRZUCANIE DO BAZY */
        $pit37 = new PIT37();
        $pit37 -> setUser($user);
        $pit37 ->setTaxDue($tax_due);
        $pit37 -> setUserServiceIncome($user_service_income);
        $pit37 -> setUserContractRevenues($user_contract_revenues);
        $pit37 -> setUserIncomeFromGraduate($user_income_from_graduate);
        $pit37 -> setUserEmploymentIncome($user_employment_income);
        $pit37 -> setUserPensionIncome($user_pension_income);
        $pit37 -> setUserActivitiesPerformedIncome($user_activities_performed_income);
        $pit37 -> setUserCopyrightIncome($user_copyright_income);
        $pit37 -> setUserOtherIncome($user_other_income);
        $pit37 -> setUserTotalIncome($user_total_income);
        $pit37 -> setUserEmploymentCostIncome($user_employment_cost_income);

        $pit37 -> setUserActivitiesPerformedCostIncome($user_activities_performed_cost_income);
        $pit37 -> setUserCopyrightCostIncome($user_copyright_cost_income);
        $pit37 -> setUserOtherCostIncome($user_other_cost_income);
        $pit37 -> setUserTotalCostIncome($user_total_cost_income);

        $pit37 -> setUserEmploymentAdvancePayment($user_employment_advance_payment);
        $pit37 -> setUserPensionAdvancePayment($user_pension_advance_payment);
        $pit37 -> setUserActivitiesPerformedAdvancePayment($user_activities_performed_advance_payment);
        $pit37 -> setUserCopyrightAdvancePayment($user_copyright_advance_payment);
        $pit37 -> setUserOtherAdvancePayment($user_other_advance_payment);
        $pit37 -> setUserTotalAdvancePayment($user_total_advance_payment);

        $pit37 -> setUserEmploymentProceeds($user_employment_proceeds);
        $pit37 -> setUserPensionProceeds($user_pension_proceeds);
        $pit37 -> setUserActivitesPerformedProceeds($user_activities_performed_proceeds);
        $pit37 -> setUserCopyrightProceeds($user_copyright_proceeds);
        $pit37 -> setUserOtherProceeds($user_other_proceeds);
        $pit37 -> setUserOtherProceeds($user_other_proceeds);
        $pit37 -> setUserTotalProceeds($user_total_proceeds);

        $pit37 -> setUserEmploymentLoss($user_employment_loss);
        $pit37 -> setUserActivitiesPerformedLoss($user_activities_performed_loss);
        $pit37 -> setUserCopyrightLoss($user_copyright_loss);
        $pit37 -> setUserOtherLoss($user_other_loss);
        $pit37 -> setUserSocialSecurity($user_social_security);
        $pit37 -> setUserPit0Deductions($user_pit0_deduction);
        $pit37 -> setUserHealthInsurance(floatval($user_health_insurance));
        $pit37 -> setUserDeduction($user_deduction);
        $pit37 -> setUserHealthInsuranceKid(floatval($user_health_insurance_kid));
        $pit37 -> setUserDifferenceBetween(floatval($user_difference_between));

        /*MALZONEK*/
        $pit37 -> setSpouseServiceIncome($spouse_service_income);
        $pit37 -> setSpouseContractRevenues($spouse_contract_revenues);
        $pit37 -> setSpouseIncomeFromGraduate($spouse_income_from_graduate);
        $pit37 -> setSpouseEmploymentIncome($spouse_employment_income);
        $pit37 -> setSpousePensionIncome($spouse_pension_income);
        $pit37 -> setSpouseActivitiesPerformedIncome($spouse_activities_performed_income);
        $pit37 -> setSpouseCopyrightIncome($spouse_copyright_income);
        $pit37 -> setSpouseOtherIncome($spouse_other_income);
        $pit37 -> setSpouseTotalIncome($spouse_total_income);
        $pit37 -> setSpouseEmploymentCostIncome($spouse_employment_cost_income);

        $pit37 -> setSpouseActivitiesPerformedCostIncome($spouse_activities_performed_cost_income);
        $pit37 -> setSpouseCopyrightCostIncome($spouse_copyright_cost_income);
        $pit37 -> setSpouseOtherCostIncome($spouse_other_cost_income);
        $pit37 -> setSpouseTotalCostIncome($spouse_total_cost_income);

        $pit37 -> setSpouseEmploymentAdvancePayment($spouse_employment_advance_payment);
        $pit37 -> setSpousePensionAdvancePayment($spouse_pension_advance_payment);
        $pit37 -> setSpouseActivitiesPerformedAdvancePayment($spouse_activities_performed_advance_payment);
        $pit37 -> setSpouseCopyrightAdvancePayment($spouse_copyright_advance_payment);
        $pit37 -> setSpouseOtherAdvancePayment($spouse_other_advance_payment);
        $pit37 -> setSpouseTotalAdvancePayment($spouse_total_advance_payment);

        $pit37 -> setSpouseEmploymentProceeds($spouse_employment_proceeds);
        $pit37 -> setSpousePensionProceeds($spouse_pension_proceeds);
        $pit37 -> setSpouseActivitiesPerformedProceeds($spouse_activities_performed_proceeds);
        $pit37 -> setSpouseCopyrightProceeds($spouse_copyright_proceeds);
        $pit37 -> setSpouseOtherProceeds($spouse_other_proceeds);
        $pit37 -> setSpouseTotalProceeds($spouse_total_proceeds);

        $pit37 -> setSpouseEmploymentLoss($spouse_employment_loss);
        $pit37 -> setSpouseActivitiesPerformedLoss($spouse_activities_performed_loss);
        $pit37 -> setSpouseCopyrightLoss($spouse_copyright_loss);
        $pit37 -> setSpouseOtherLoss($spouse_other_loss);
        $pit37 -> setSpouseSocialSecurity($spouse_social_security);
        $pit37 -> setSpousePit0Deductions($spouse_pit0_deduction);
        $pit37 -> setSpouseHealthInsurance(floatval($spouse_health_insurance));
        $pit37 -> setSpouseDeduction($spouse_deduction);
        $pit37 -> setSpouseHealthInsuranceKid(floatval($spouse_health_insurance_kid));
        $pit37 -> setSpouseDifferenceBetween(floatval($spouse_difference_between));

        /*CZESC WSPOLNA */
        $pit37 -> setInterestRelief($interest_relief);
        $pit37 -> setIncomeAfterDeductions($income_after_deductions);
        $pit37 -> setHousingDeductionsFromIncome($housing_deductions_from_income);
        $pit37 -> setBasisForTaxCalculation($basis_for_tax_calculation);
        $pit37 -> setCalculatedTax($calculated_tax);
        $pit37 -> setTaxAdditions($tax_additions);
        $pit37 -> setTaxAfterDeduction($tax_after_deduction);
        $pit37 -> setHousingDeductionsFromTax($housing_deductions_from_tax);
        $pit37 -> setDifferenceBetweenTax($difference_between_tax);
        $pit37 -> setDifferenceBetweenTaxSum($difference_between_tax_sum);
        $pit37 -> setDueDifference(floatval($due_difference));
        $pit37 -> setConclusiveReturn(floatval($conclusive_return));
        $pit37 -> setIncome(floatval($income));
        $pit37 -> setKrsNumber(floatval($krs_number));
        $pit37 -> setKrsAmount(floatval($krs_amount));

        $this->entityManager->persist($pit37);
        $this->entityManager->flush();

        return $this -> render('PIT/pit37.form.html.twig',[

        ]);
    }
}