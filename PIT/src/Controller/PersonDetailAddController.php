<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class PersonDetailAddController extends AbstractController
{
    #[Route(path: '/person_detail_add',name: 'app_person_detail_add')]
    public function Person_detail_add(Security $security){
        $user = $security->getUser();
        if(!$user){
            throw $this->createAccessDeniedException("Musisz być zalogowany aby uzyskać dostep do tej strony - jak tu trafiles??");
        }
        return $this->render('person/person.detail.html.twig',[
           'user'=>$user,
        ]);
    }
}