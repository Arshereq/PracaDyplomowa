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

}