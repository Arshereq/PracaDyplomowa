<?php

namespace App\Controller;

use App\Entity\PersonDetail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use DateTimeImmutable;
use function PHPUnit\Framework\throwException;

class PersonDetailController extends AbstractController
{

    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route(path: '/person_detail',name: 'app_person')]
    public function Person_detail(Request $request)
    {

        $user = $this->getUser();
        $userid =$user->getId();
        $name = $request->request->get('name');
        $surname = $request->request->get('surname');
        $birth_date = new DateTimeImmutable($request->request->get('birth_date'));
        $pesel = $request->request->get('pesel');
        $country = $request->request->get('country');
        $voivodeship = $request->request->get('voivodeship');
        $town = $request->request->get('town');
        $commune = $request->request->get('commune');
        $county = $request->request->get('county');
        $street = $request->request->get('street');
        $house_number = $request->request->get('house_number');
        $apartment_number = $request->request->get('apartment_number');
        $zip_code = $request->request->get('zip_code');

        $person_detail = new PersonDetail();
        $person_detail->setUser($user);
        $person_detail->setName($name);
        $person_detail->setSurname($surname);
        $person_detail->setBirthDate($birth_date);
        $person_detail->setPESEL($pesel);
        $person_detail->setCountry($country);
        $person_detail->setVoivodeship($voivodeship);
        $person_detail->setTown($town);
        $person_detail->setCommune($commune);
        $person_detail->setCounty($county);
        $person_detail->setStreet($street);
        $person_detail->setHouseNumber($house_number);
        $person_detail->setApartmentNumber($apartment_number);
        $person_detail->setZipCode($zip_code);

        $this->entityManager->persist($person_detail);
        $this->entityManager->flush();

        return $this->redirectToRoute('person_detail',[
        ]);
    }
}