<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Users;
use DateTime;

/**
 * @Route("/user",name="user")
 */
class UserController extends AbstractFOSRestController
{

    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var ObjectRepository */
    private $usersRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->objectRepository = $this->entityManager->getRepository(Users::class);
    }

    /**
     * @Rest\Post("/new")
     * @return Response
     */
    public function index(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        $users = new Users();
        $users->setEmail($data["email"]);
        $users->setPassword($data["password"]);
        $users->setCreated(new DateTime());

        $this->entityManager->persist($users);
        $this->entityManager->flush();

        $serializer = $this->get('serializer');
        $data = $serializer->serialize($users, 'json');

        return new JsonResponse(
            [
                "data" => $data
            ],
            JsonResponse::HTTP_CREATED
        );
    }
}
