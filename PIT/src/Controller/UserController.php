<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class UserController extends AbstractController
{
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
}