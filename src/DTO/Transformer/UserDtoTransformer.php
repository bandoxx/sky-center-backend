<?php

namespace App\DTO\Transformer;

use App\DTO\UserDto;
use App\Entity\User;

class UserDtoTransformer extends AbstractDtoTransformer
{
    /**
     * @param User $user
     * @return UserDto
     */
    public function transformFromObject($user): UserDto
    {
        $dto = new UserDto();

        $dto->setId($user->getId());
        $dto->setFirstName($user->getFirstName());
        $dto->setLastName($user->getLastName());
        $dto->setGender($user->getGender());
        $dto->setUsername($user->getEmail());

        return $dto;
    }


}