<?php

namespace App\Controller;
use App\Entity\PersonDetail;
use App\Repository\PIT0Repository;
use App\Repository\PIT37Repository;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\Tfpdf;
use setasign\Fpdi\PdfReader;
use Symfony\Component\HttpFoundation\Response;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use TCPDF;


class PDFController extends AbstractController
{
    private $pit37Repository;
    private $snappy;
    public function __construct(PIT37Repository $pit37Repository, PIT0Repository $PIT0Repository,Pdf $snappy)
    {
        $this -> pit37Repository=$pit37Repository;
        $this -> PIT0Repository=$PIT0Repository;
        $this->snappy = $snappy;
    }

    #[Route(path: '/PDF', name: "pdf_converted")]
    public function ConvertPDF(Security $security)
    {
        $user =$security->getUser();
        $Pit37 = $this->pit37Repository->findOneBy(['user' => $user], ['id' => 'DESC']);
        $Pit0 = $this->PIT0Repository->findOneBy(['user' => $user], ['id' => 'DESC']);

        $personDetail=$user->getPersonDetailId();
        $spouseDetail=$user->getSpouseId() -> getPersonDetailId();

        // Create new PDF document
        $pdf = new Fpdi('P','mm','A4','UTF-8');

        // Set source PDF file
        $pageCount=$pdf->setSourceFile($this->getParameter('kernel.project_dir').'/templates/pit37_27-07.pdf');
        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            // import page
            $tplIdx = $pdf->importPage($pageNo);
//            $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
            $pdf->SetFont('Arial','',14);
            $pdf->AddPage('P', 'A4', 0, true, 'UTF-8');
            $pdf->useTemplate($tplIdx);
            $userSurname = $personDetail ? $personDetail->getSurname() :" ";
            $userName = $personDetail ? $personDetail -> getName():" ";
            $userBirthDate = $personDetail ? $personDetail -> getBirthDate() ->format('d      .m    .Y'):' ';
            $userCountry = $personDetail ? $personDetail -> getCountry():' ';
            $userVoivodeship = $personDetail ? $personDetail -> getVoivodeship(): ' ';
            $userCounty = $personDetail ? $personDetail -> getCounty(): ' ';
            $userCommune = $personDetail ? $personDetail -> getCommune(): ' ';
            $userStreet = $personDetail ? $personDetail -> getStreet(): ' ';
            $userHouseNumber = $personDetail ? $personDetail -> getHouseNumber(): ' ';
            $userApartmentNumber = $personDetail ? $personDetail -> getApartmentNumber(): " ";
            $userTown = $personDetail ? $personDetail -> getTown(): ' ';
            $userZipCode = $personDetail ? $personDetail -> getZipCode(): ' ';

            /*PIT37*/
            $userServiceIncome = $Pit37 ? $Pit37->getUserServiceIncome(): ' ';
            $userContractRevenues = $Pit37 ? $Pit37->getUserContractRevenues(): ' ';

            /*I kolumna- przychod*/
            $userEmploymentIncome = $Pit37 ? $Pit37->getUserEmploymentIncome(): ' ';
            $userPensionIncome = $Pit37 ? $Pit37->getUserPensionIncome(): ' ';
            $userActivitiesPerformedIncome = $Pit37 ? $Pit37->getUserActivitiesPerformedIncome(): ' ';
            $userCopyrightIncome = $Pit37 ? $Pit37->getUserCopyrightIncome(): ' ';
            $userOtherIncome = $Pit37 ? $Pit37 -> getUserOtherIncome(): ' ';
            $userTotalIncome = $Pit37 ? $Pit37->getUserTotalIncome():' ';

            /*II kolumna - koszty przychodu*/
            $userEmploymentCostIncome = $Pit37 ? $Pit37->getUserEmploymentCostIncome(): ' ';
            $userActivitiesPerformedCostIncome = $Pit37 ? $Pit37->getUserActivitiesPerformedCostIncome(): ' ';
            $userCopyrightCostIncome = $Pit37 ? $Pit37->getUserCopyrightCostIncome(): ' ';
            $userOtherCostIncome = $Pit37 ? $Pit37 -> getUserOtherCostIncome(): ' ';
            $userTotalCostIncome = $Pit37 ? $Pit37->getUserTotalCostIncome():' ';

            /*III kolumna - dochod*/
            $userEmploymentProceeds = $Pit37 ? $Pit37->getUserEmploymentProceeds():' ';
            $userActivitiesPerformedProceeds= $Pit37 ? $Pit37->getUserActivitesPerformedProceeds():' ';
            $userCopyrightProceeds = $Pit37 ? $Pit37->getUserCopyrightProceeds():' ';
            $userOtherProceeds = $Pit37 ? $Pit37->getUserOtherProceeds():' ';
            $userTotalProceeds = $Pit37 ? $Pit37->getUserTotalProceeds():' ';

            /*V kolumna - zaliczka pobrana przez płatnika*/
            $userEmploymentAdvancePayment = $Pit37 ? $Pit37->getUserEmploymentAdvancePayment(): ' ';
            $userPensionAdvancePayment = $Pit37 ? $Pit37->getUserPensionAdvancePayment(): ' ';
            $userActivitesPerformedAdvancePayment = $Pit37 ? $Pit37->getUserActivitiesPerformedAdvancePayment(): ' ';
            $userCopyrightAdvancePayment = $Pit37 ? $Pit37->getUserCopyrightAdvancePayment(): ' ';
            $userOtherAdvancePayment = $Pit37 ? $Pit37->getUserOtherAdvancePayment(): ' ';
            $userTotalAdvancePayment = $Pit37 ? $Pit37->getUserTotalAdvancePayment(): ' ';

            /*Małżonek*/
            $spouseSurname = $spouseDetail ? $spouseDetail->getSurname() :" ";
            $spouseName = $spouseDetail ? $spouseDetail -> getName():" ";
            $spouseBirthDate = $spouseDetail ? $spouseDetail -> getBirthDate() ->format('d      .m    .Y'):' ';
            $spouseCountry = $spouseDetail ? $spouseDetail -> getCountry():' ';
            $spouseVoivodeship = $spouseDetail ? $spouseDetail -> getVoivodeship(): ' ';
            $spouseCounty = $spouseDetail ? $spouseDetail -> getCounty(): ' ';
            $spouseCommune = $spouseDetail ? $spouseDetail -> getCommune(): ' ';
            $spouseStreet = $spouseDetail ? $spouseDetail -> getStreet(): ' ';
            $spouseHouseNumber = $spouseDetail ? $spouseDetail -> getHouseNumber(): ' ';
            $spouseApartmentNumber = $spouseDetail ? $spouseDetail -> getApartmentNumber(): " ";
            $spouseTown = $spouseDetail ? $spouseDetail -> getTown(): ' ';
            $spouseZipCode = $spouseDetail ? $spouseDetail -> getZipCode(): ' ';

            /*PIT37*/
            $spouseServiceIncome = $Pit37 ? $Pit37->getSpouseServiceIncome(): ' ';
            $spouseContractRevenues = $Pit37 ? $Pit37->getSpouseContractRevenues(): ' ';

            /*I kolumna- przychod*/
            $spouseEmploymentIncome = $Pit37 ? $Pit37->getSpouseEmploymentIncome(): ' ';
            $spousePensionIncome = $Pit37 ? $Pit37->getSpousePensionIncome(): ' ';
            $spouseActivitiesPerformedIncome = $Pit37 ? $Pit37->getSpouseActivitiesPerformedIncome(): ' ';
            $spouseCopyrightIncome = $Pit37 ? $Pit37->getSpouseCopyrightIncome(): ' ';
            $spouseOtherIncome = $Pit37 ? $Pit37 -> getSpouseOtherIncome(): ' ';
            $spouseTotalIncome = $Pit37 ? $Pit37->getSpouseTotalIncome():' ';

            /*II kolumna - koszty przychodu*/
            $spouseEmploymentCostIncome = $Pit37 ? $Pit37->getSpouseEmploymentCostIncome(): ' ';
            $spouseActivitiesPerformedCostIncome = $Pit37 ? $Pit37->getSpouseActivitiesPerformedCostIncome(): ' ';
            $spouseCopyrightCostIncome = $Pit37 ? $Pit37->getSpouseCopyrightCostIncome(): ' ';
            $spouseOtherCostIncome = $Pit37 ? $Pit37 -> getSpouseOtherCostIncome(): ' ';
            $spouseTotalCostIncome = $Pit37 ? $Pit37->getSpouseTotalCostIncome():' ';

            /*III kolumna - dochod*/
            $spouseEmploymentProceeds = $Pit37 ? $Pit37->getSpouseEmploymentProceeds():' ';
            $spouseActivitiesPerformedProceeds= $Pit37 ? $Pit37->getSpouseActivitiesPerformedProceeds():' ';
            $spouseCopyrightProceeds = $Pit37 ? $Pit37->getSpouseCopyrightProceeds():' ';
            $spouseOtherProceeds = $Pit37 ? $Pit37->getSpouseOtherProceeds():' ';
            $spouseTotalProceeds = $Pit37 ? $Pit37->getSpouseTotalProceeds():' ';

            /*V kolumna - zaliczka pobrana przez płatnika*/
            $spouseEmploymentAdvancePayment = $Pit37 ? $Pit37->getSpouseEmploymentAdvancePayment(): ' ';
            $spousePensionAdvancePayment = $Pit37 ? $Pit37->getSpousePensionAdvancePayment(): ' ';
            $spouseActivitesPerformedAdvancePayment = $Pit37 ? $Pit37->getSpouseActivitiesPerformedAdvancePayment(): ' ';
            $spouseCopyrightAdvancePayment = $Pit37 ? $Pit37->getSpouseCopyrightAdvancePayment(): ' ';
            $spouseOtherAdvancePayment = $Pit37 ? $Pit37->getSpouseOtherAdvancePayment(): ' ';
            $spouseTotalAdvancePayment = $Pit37 ? $Pit37->getSpouseTotalAdvancePayment(): ' ';

            /*ODLICZENIA OD DOCHODU*/
            $userSocialSecurity = $Pit37 ? $Pit37->getUserSocialSecurity():' 0';
            $userPit0Deductions = $Pit37 ? $Pit37->getUserPit0Deductions(): ' 0';
            $spouseSocialSecurity = $Pit37 ? $Pit37->getSpouseSocialSecurity(): '0';
            $spousePit0Deductions = $Pit37 ? $Pit37->getSpousePit0Deductions(): '0';
            $interestRelief = $Pit37 ? $Pit37->getInterestRelief(): ' 0';
            $incomeAfterDeductions = $Pit37 ? $Pit37->getIncomeAfterDeductions(): ' 0';

            /*ODLICZENIA OD PODATKU*/
            $userHealthInsurance = $Pit37 ? $Pit37->getUserHealthInsurance():' ';
            $spouseHealthInsurance = $Pit37 ? $Pit37->getSpouseHealthInsurance(): ' ';
            $userDeduction=$Pit37?$Pit37->getUserDeduction():' ';
            $spouseDeduction=$Pit37?$Pit37->getSpouseDeduction(): ' ';

            /*DOCHODY*/
            $income = $Pit37 ? $Pit37->getIncome(): ' ';
            /*KRS*/
            $krsNumber = $Pit37 ? $Pit37->getKrsNumber(): ' ';
            $krsAmount = $Pit37 ? $Pit37->getKrsAmount(): ' ';

            if($pageNo == 1) {
//                $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
                $pdf->SetFont('Arial','',12);
                $pdf->SetTextColor(0,0,0);

                $pdf -> SetXY(20,197);
                $pdf->Cell(0,10,$userSurname,0,1,);
                $pdf -> SetXY(100,197);
                $pdf->Cell(0,10,$userName,0,1);
                $pdf -> SetXY(150,197);
                $pdf->Cell(20,10,$userBirthDate,0,1);

                $pdf -> SetXY(20,205);
                $pdf->Cell(0,10,$userCountry,0,1);
                $pdf -> SetXY(60,205);
                $pdf->Cell(0,10,$userVoivodeship ,0,1);
                $pdf -> SetXY(140,205);
                $pdf->Cell(0,10,$userCounty ,0,1);

                $pdf -> SetXY(20,215);
                $pdf->Cell(0,10,$userCommune ,0,1);
                $pdf -> SetXY(70,215);
                $pdf->Cell(0,10,$userStreet ,0,1);
                $pdf -> SetXY(160,215);
                $pdf->Cell(0,10, $userHouseNumber,0,1);
                $pdf -> SetXY(180,215);
                $pdf->Cell(0,10,$userApartmentNumber ,0,1);

                $pdf -> SetXY(20,225);
                $pdf->Cell(0,10,$userTown ,0,1);
                $pdf -> SetXY(140,225);
                $pdf->Cell(0,10,$userZipCode ,0,1);

                /*Małżonek dane*/
                $pdf -> SetXY(20,242);
                $pdf->Cell(0,10,$spouseSurname,0,1,1);
                $pdf -> SetXY(100,242);
                $pdf->Cell(0,10,$spouseName,0,1);
                $pdf -> SetXY(150,242);
                $pdf->Cell(10,10,$spouseBirthDate,0,1);

                $pdf -> SetXY(20,250);
                $pdf->Cell(0,10,$spouseCountry,0,1);
                $pdf -> SetXY(60,250);
                $pdf->Cell(0,10,$spouseVoivodeship,0,1);
                $pdf -> SetXY(140,250);
                $pdf->Cell(0,10,$spouseCounty,0,1);

                $pdf -> SetXY(20,260);
                $pdf->Cell(0,10,$spouseCommune,0,1);
                $pdf -> SetXY(70,260);
                $pdf->Cell(0,10,$spouseStreet,0,1);
                $pdf -> SetXY(160,260);
                $pdf->Cell(0,10,$spouseHouseNumber,0,1);
                $pdf -> SetXY(180,260);
                $pdf->Cell(0,10,$spouseApartmentNumber,0,1);

                $pdf -> SetXY(20,266.9);
                $pdf->Cell(0,10,$spouseTown,0,1);
                $pdf -> SetXY(140,266.9);
                $pdf->Cell(0,10,$spouseZipCode,0,1);

            } elseif ($pageNo == 2) {
                $pdf->SetFont('Arial','',12);
                $pdf->SetTextColor(0,0,0);
                $pdf -> SetXY(153,35);
                $pdf->Cell(0,10,$userServiceIncome,0,1);
                $pdf -> SetXY(153,45);
                $pdf->Cell(0,10,$userContractRevenues,0,1);
                $pdf -> SetXY(187,35);
                $pdf->Cell(0,10,$spouseServiceIncome,0,1);
                $pdf -> SetXY(187,45);
                $pdf->Cell(0,10,$spouseContractRevenues,0,1);

                $pdf -> SetXY(67,93);
                $pdf->Cell(0,10,$userEmploymentIncome,0,1);
                $pdf -> SetXY(67,112);
                $pdf->Cell(0,10,$userPensionIncome,0,1);
                $pdf -> SetXY(67,122);
                $pdf->Cell(0,10,$userActivitiesPerformedIncome,0,1);
                $pdf -> SetXY(67,138);
                $pdf->Cell(0,10,$userCopyrightIncome,0,1);
                $pdf -> SetXY(67,158);
                $pdf->Cell(0,10,$userOtherIncome,0,1);
                $pdf -> SetXY(67,167);
                $pdf->Cell(0,10,$userTotalIncome,0,1);

                $pdf -> SetXY(95,93);
                $pdf->Cell(0,10,$userEmploymentCostIncome,0,1);
                $pdf -> SetXY(95,122);
                $pdf->Cell(0,10,$userActivitiesPerformedCostIncome,0,1);
                $pdf -> SetXY(95,138);
                $pdf->Cell(0,10,$userCopyrightCostIncome,0,1);
                $pdf -> SetXY(95,158);
                $pdf->Cell(0,10,$userOtherCostIncome,0,1);
                $pdf -> SetXY(95,167);
                $pdf->Cell(0,10,$userTotalCostIncome,0,1);

                $pdf -> SetXY(120,105);
                $pdf->Cell(0,10,$userEmploymentProceeds,0,1);
                $pdf -> SetXY(120,130);
                $pdf->Cell(0,10,$userActivitiesPerformedProceeds,0,1);
                $pdf -> SetXY(120,150);
                $pdf->Cell(0,10,$userCopyrightProceeds,0,1);
                $pdf -> SetXY(120,158);
                $pdf->Cell(0,10,$userOtherProceeds,0,1);
                $pdf -> SetXY(120,167);
                $pdf->Cell(0,10,$userTotalProceeds,0,1);

                $pdf -> SetXY(180,105);
                $pdf->Cell(0,10,$userEmploymentAdvancePayment,0,1);
                $pdf -> SetXY(180,113);
                $pdf->Cell(0,10,$userPensionAdvancePayment,0,1);
                $pdf -> SetXY(180,130);
                $pdf->Cell(0,10,$userActivitesPerformedAdvancePayment,0,1);
                $pdf -> SetXY(180,150);
                $pdf->Cell(0,10,$userCopyrightAdvancePayment,0,1);
                $pdf -> SetXY(180,160);
                $pdf->Cell(0,10,$userOtherAdvancePayment,0,1);
                $pdf -> SetXY(180,167);
                $pdf->Cell(0,10,$userTotalAdvancePayment,0,1);

                $pdf -> SetXY(67,195);
                $pdf->Cell(0,10,$spouseEmploymentIncome,0,1);
                $pdf -> SetXY(67,215);
                $pdf->Cell(0,10,$spousePensionIncome,0,1);
                $pdf -> SetXY(67,222);
                $pdf->Cell(0,10,$spouseActivitiesPerformedIncome,0,1);
                $pdf -> SetXY(67,240);
                $pdf->Cell(0,10,$spouseCopyrightIncome,0,1);
                $pdf -> SetXY(67,260);
                $pdf->Cell(0,10,$spouseOtherIncome,0,1);
                $pdf -> SetXY(67,266);
                $pdf->Cell(0,10,$spouseTotalIncome,0,1);

                $pdf -> SetXY(95,195);
                $pdf->Cell(0,10,$spouseEmploymentCostIncome,0,1);
                $pdf -> SetXY(95,222);
                $pdf->Cell(0,10,$spouseActivitiesPerformedCostIncome,0,1);
                $pdf -> SetXY(95,240);
                $pdf->Cell(0,10,$spouseCopyrightCostIncome,0,1);
                $pdf -> SetXY(95,260);
                $pdf->Cell(0,10,$spouseOtherCostIncome,0,1);
                $pdf -> SetXY(95,266);
                $pdf->Cell(0,10,$spouseTotalCostIncome,0,1);

                $pdf -> SetXY(120,195);
                $pdf->Cell(0,10,$spouseEmploymentProceeds,0,1);
                $pdf -> SetXY(120,222);
                $pdf->Cell(0,10,$spouseActivitiesPerformedProceeds,0,1);
                $pdf -> SetXY(120,240);
                $pdf->Cell(0,10,$spouseCopyrightProceeds,0,1);
                $pdf -> SetXY(120,260);
                $pdf->Cell(0,10,$spouseOtherProceeds,0,1);
                $pdf -> SetXY(120,266);
                $pdf->Cell(0,10,$spouseTotalProceeds,0,1);

                $pdf -> SetXY(180,195);
                $pdf->Cell(0,10,$spouseEmploymentAdvancePayment,0,1);
                $pdf -> SetXY(180,215);
                $pdf->Cell(0,10,$spousePensionAdvancePayment,0,1);
                $pdf -> SetXY(180,230);
                $pdf->Cell(0,10,$spouseActivitesPerformedAdvancePayment,0,1);
                $pdf -> SetXY(180,250);
                $pdf->Cell(0,10,$spouseCopyrightAdvancePayment,0,1);
                $pdf -> SetXY(180,260);
                $pdf->Cell(0,10,$spouseOtherAdvancePayment,0,1);
                $pdf -> SetXY(180,266);
                $pdf->Cell(0,10,$spouseTotalAdvancePayment,0,1);

            } elseif ($pageNo == 3){
                $pdf->SetFont('Arial','',12);
                $pdf->SetTextColor(0,0,0);

                $pdf -> SetXY(150,25);
                $pdf->Cell(0,10,$userSocialSecurity,0,1);
                $pdf -> SetXY(180,25);
                $pdf->Cell(0,10,$spouseSocialSecurity,0,1);

                $pdf -> SetXY(150,45);
                $pdf->Cell(0,10,$userPit0Deductions,0,1);
                $pdf -> SetXY(180,35);
                $pdf->Cell(0,10,$spousePit0Deductions,0,1);

                $pdf -> SetXY(180,50);
                $pdf->Cell(0,10,$incomeAfterDeductions,0,1);

                $pdf -> SetXY(150,115);
                $pdf->Cell(0,10,$userHealthInsurance,0,1);
                $pdf -> SetXY(180,115);
                $pdf->Cell(0,10,$spouseHealthInsurance,0,1);

                $pdf -> SetXY(150,124);
                $pdf->Cell(0,10,$userDeduction,0,1);
                $pdf -> SetXY(180,124);
                $pdf->Cell(0,10,$spouseDeduction,0,1);

                $pdf -> SetXY(20,253);
                $pdf->Cell(0,10,$income,0,1);


            } else {
                $pdf->SetFont('Arial','',12);
                $pdf->SetTextColor(0,0,0);
                $pdf -> SetXY(20,35);
                $pdf->Cell(0,10,$krsNumber,0,1);
                $pdf -> SetXY(170,35);
                $pdf->Cell(0,10,$krsAmount,0,1);

            }
        }
        // Generuj plik PDF
//        $pdf->Output("PIT37.pdf", "D",true);
        $response = new Response($pdf->Output('', 'S',true));
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="Pit-37.pdf"');
        return $response;
    }
}