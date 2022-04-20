<?php

namespace App\DTO;

class UserDto
{

    private ?int $id;
    private ?string $firstName;
    private ?string $lastName;
    private ?string $username;
    private ?int $gender;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): UserDto
    {
        $this->id = $id;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): UserDto
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): UserDto
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): UserDto
    {
        $this->username = $username;
        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): UserDto
    {
        $this->gender = $gender;
        return $this;
    }
}