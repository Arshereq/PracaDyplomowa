<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Repository\PIT37Repository;

class UserController extends AbstractController
{
    private $pit37Repository;
    public function __construct(PIT37Repository $pit37Repository)
    {
        $this -> pit37Repository=$pit37Repository;
    }
    #[Route(path: '/user', name: 'app_user')]
    public function User_detail(Security $security)
    {
        $user = $security->getUser();
        if(!$user){
            throw $this->createAccessDeniedException("Musisz być zalogowany aby uzyskać dostep do tej strony - jak tu trafiles??");
        }

        $personDetail=$user->getPersonDetailId();
        $spouseDetail=$user->getSpouseId();
        return $this->render('person/user.detail.html.twig',[
            'user' => $user,
            'personDetail' => $personDetail,
            'spouseDetail' => $spouseDetail,
        ]);
    }
    #[Route(path: '/pit-summary', name: 'pit_summary')]
    public function Pit_summary(Security $security){
        $user = $security->getUser();
        $lastPit37 = $this->pit37Repository->findOneBy(['user'=>$user],['id'=>'DESC']);
        $personDetail=$user->getPersonDetailId();
        $spouseDetail=$user->getSpouseId();
        $pit0=$user->getPIT0();
        $pit37=$user->getPit37();
        return $this->render('PIT/pitsummary.html.twig',[
            'user'=>$user,
            'lastPit37'=>$lastPit37,
            'personDetail'=>$personDetail,
            'spouseDetail'=>$spouseDetail,
        ]);

    }
}