<?php

namespace App\Controller;

use App\DTO\Transformer\UserDtoTransformer;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class UserController extends AbstractController
{

    public function __construct(public UserDtoTransformer $dtoTransformer) {}

    #[Route('/user/me', name: 'user_current', methods: 'GET')]
    public function currentUser(): JsonResponse
    {
        return $this->json($this->dtoTransformer->transformFromObject($this->getUser()), Response::HTTP_OK);
    }

    #[Route('/user/{id}', name: 'user_get', methods: 'GET')]
    public function getUserData(User $user): JsonResponse
    {
        if ($user->getId() !== $this->getUser()->getId()) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
        }

        return $this->json($this->dtoTransformer->transformFromObject($user), Response::HTTP_OK);
    }

}