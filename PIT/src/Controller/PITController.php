<?php

namespace App\Controller;

use App\Entity\PIT0;
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
}