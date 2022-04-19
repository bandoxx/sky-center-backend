<?php

namespace App\Entity;

use App\Repository\DropzoneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DropzoneRepository::class)]
class Dropzone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $latitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $longitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $email;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $phone;

    #[ORM\Column(type: 'boolean')]
    private $uspaMember = false;

    #[ORM\Column(type: 'string', length: 255)]
    private $icao;

    #[ORM\Column(type: 'boolean')]
    private $tandem = false;

    #[ORM\Column(type: 'boolean')]
    private $aff = false;

    #[ORM\ManyToOne(targetEntity: Country::class, inversedBy: 'dropzones')]
    private $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function isUspaMember(): ?bool
    {
        return $this->uspaMember;
    }

    public function setUspaMember(bool $uspaMember): self
    {
        $this->uspaMember = $uspaMember;

        return $this;
    }

    public function getIcao(): ?string
    {
        return $this->icao;
    }

    public function setIcao(string $icao): self
    {
        $this->icao = $icao;

        return $this;
    }

    public function hasTandem(): ?bool
    {
        return $this->tandem;
    }

    public function setTandem(bool $tandem): self
    {
        $this->tandem = $tandem;

        return $this;
    }

    public function hasAff(): ?bool
    {
        return $this->aff;
    }

    public function setAff(bool $aff): self
    {
        $this->aff = $aff;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }
}
