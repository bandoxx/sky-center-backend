<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
class Country
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'country', targetEntity: Dropzone::class)]
    private $dropzones;

    public function __construct()
    {
        $this->dropzones = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Dropzone>
     */
    public function getDropzones(): Collection
    {
        return $this->dropzones;
    }

    public function addDropzone(Dropzone $dropzone): self
    {
        if (!$this->dropzones->contains($dropzone)) {
            $this->dropzones[] = $dropzone;
            $dropzone->setCountry($this);
        }

        return $this;
    }

    public function removeDropzone(Dropzone $dropzone): self
    {
        if ($this->dropzones->removeElement($dropzone)) {
            // set the owning side to null (unless already changed)
            if ($dropzone->getCountry() === $this) {
                $dropzone->setCountry(null);
            }
        }

        return $this;
    }
}
