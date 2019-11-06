<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

//@ORM\HasLifecycleCallbacks ADD to enable lifecycle

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyRepository")
 */
class Property
{
    const SERVER_PATH_TO_IMAGE_FOLDER = '/Users/abhishek/Documents/SANDBOX/sonatest/public/image';
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

    private $file;

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

//    /**
//     * Manages the copying of the file to the relevant place on the server
//     */
//    public function upload()
//    {
//        dd($this->getImageFile());
//        // the file property can be empty if the field is not required
//        if (null === $this->getImageFile()) {
//            return;
//        }
//
//        // we use the original file name here but you should
//        // sanitize it at least to avoid any security issues
//
//        // move takes the target directory and target filename as params
//        $this->getImageFile()->move(
//            self::SERVER_PATH_TO_IMAGE_FOLDER,
//            $this->getImageFile()->getClientOriginalName()
//        );
//
//        // set the path property to the filename where you've saved the file
//        $this->imageFile = $this->getImageFile()->getClientOriginalName();
//
//        // clean up the file property as you won't need it anymore
//        $this->setFile(null);
//    }

//    /**
//     * @ORM\PreUpdate()
//     */
//    public function preUpdate()
//    {
//        $this->upload();
//    }

}
