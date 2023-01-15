<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

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
    #[Route(path: '/PIT-0', name: 'PIT-0')]
    public function PIT_0(Security $security)
    {
        $user = $security->getUser();
        $personDetail=$user->getPersonDetailId();
        $spouseDetail=$user->getSpouseId();

        return $this->render('PIT/pit0.form.html.twig',[
            'user' => $user,
            'personDetail' => $personDetail,
            'spouseDetail' => $spouseDetail,
        ]);

    }
}