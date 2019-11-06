<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

//@ORM\HasLifecycleCallbacks ADD to enable lifecycle

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyRepository")
 */
class Property
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", options={"default"="nextval('property_id_seq'::regclass)"})
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageFile;

    private $file; //unmapped field to hold image file i.e. field is not present in database

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(?string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getImageFile(): ?string
    {
        return $this->imageFile;
    }

    public function setImageFile(?string $imageFile): self
    {
        $this->imageFile = $imageFile;

        return $this;
    }


    public function setFile( $file = null)
    {
        $this->file = $file;
        return $this;
    }


    public function getFile()
    {
        return $this->file;
    }
}
