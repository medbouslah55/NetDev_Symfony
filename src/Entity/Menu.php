<?php

namespace App\Entity;

use App\Entity\Regime;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\Timestampable;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="FK_menu_regime", columns={"id_regime"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */

//Vich totorial to upload multiple images : https://www.youtube.com/watch?v=u4v-fLllGf8
class Menu
{
    use Timestampable;
    /**
     * @var int
     *
     * @ORM\Column(name="id_menu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     * @Assert\Length(
     * min = 5,
     * max = 40, 
     * minMessage = "Description doit être {{ limit }} caractères minimum", 
     * maxMessage = "Description doit être {{ limit }} caractères maximum")
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_jour", type="integer", nullable=true)
     * @Assert\Positive
     */
    private $numJour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matin", type="string", length=255, nullable=true)
     * @Assert\Length(min = 3, max = 30,
     * minMessage = "Matin doit etre au moin {{ limit }} caractères",
     * maxMessage = "Matin doit etre au maximum {{ limit }} caractères")
     */
    private $matin;

    /**
     * @var string|null
     * 
     * @ORM\Column(name="matin_img", type="string", length=255, nullable=true)
     */
    private $matinImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dejeuner", type="string", length=255, nullable=true)
     * @Assert\Length(min = 3, max = 30,
     * minMessage = "Dejeuner doit être au moins {{ limit }} caractères",
     * maxMessage = "Dejeuner doit être au maximum {{ limit }} caractères")
     */
    private $dejeuner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dejeuner_img", type="string", length=255, nullable=true)
     */
    private $dejeunerImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dinner", type="string", length=255, nullable=true)
     * @Assert\Length(min = 3, max = 30,  
     * minMessage = "Dinner doit etre au moin {{ limit }} caractères",
     * maxMessage = "Dinner doit etre au maximum {{ limit }} caractères")
     */
    private $dinner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dinner_img", type="string", length=255, nullable=true)
     */
    private $dinnerImg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_calories", type="integer", nullable=true)
     * @Assert\Positive
     */
    private $totalCalories;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="menu_image", fileNameProperty="matin_img")
     * @Assert\NotNull
     * @Assert\Image(maxSize="2M")
     * 
     * @var File|null
     */
    private $imageFile1;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="menu_image", fileNameProperty="dejeuner_img")
     * @Assert\NotNull
     * @Assert\Image(maxSize="2M")
     * 
     * @var File|null
     */
    private $imageFile2;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="menu_image", fileNameProperty="dinner_img")
     * @Assert\NotNull
     * @Assert\Image(maxSize="2M")
     * 
     * @var File|null
     */
    private $imageFile3;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Regime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_regime", referencedColumnName="id_regime")
     * })
     * 
     */
    private $idRegime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMenu(): ?int
    {
        return $this->idMenu;
    }

    public function setIdMenu(int $idMenu): self
    {
        $this->idMenu = $idMenu;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNumJour(): ?int
    {
        return $this->numJour;
    }

    public function setNumJour(int $numJour): self
    {
        $this->numJour = $numJour;

        return $this;
    }

    public function getMatin(): ?string
    {
        return $this->matin;
    }

    public function setMatin(string $matin): self
    {
        $this->matin = $matin;

        return $this;
    }

    public function getMatinImg(): ?string
    {
        return $this->matinImg;
    }

    public function setMatinImg(string $matinImg): self
    {
        $this->matinImg = $matinImg;

        return $this;
    }

    public function getDejeuner(): ?string
    {
        return $this->dejeuner;
    }

    public function setDejeuner(string $dejeuner): self
    {
        $this->dejeuner = $dejeuner;

        return $this;
    }

    public function getDejeunerImg(): ?string
    {
        return $this->dejeunerImg;
    }

    public function setDejeunerImg(string $dejeunerImg): self
    {
        $this->dejeunerImg = $dejeunerImg;

        return $this;
    }

    public function getDinner(): ?string
    {
        return $this->dinner;
    }

    public function setDinner(string $dinner): self
    {
        $this->dinner = $dinner;

        return $this;
    }

    public function getDinnerImg(): ?string
    {
        return $this->dinnerImg;
    }

    public function setDinnerImg(string $dinnerImg): self
    {
        $this->dinnerImg = $dinnerImg;

        return $this;
    }

    public function getTotalCalories(): ?int
    {
        return $this->totalCalories;
    }

    public function setTotalCalories(int $totalCalories): self
    {
        $this->totalCalories = $totalCalories;

        return $this;
    }

    public function getIdRegime(): ?Regime
    {
        return $this->idRegime;
    }

    public function setIdRegime(Regime $idRegime): self
    {
        $this->idRegime = $idRegime;

        return $this;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile1
     */
    public function setImageFile1(?File $imageFile1 = null): void
    {
        $this->imageFile1 = $imageFile1;

        if (null !== $imageFile1) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile1(): ?File
    {
        return $this->imageFile1;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile1
     */
    public function setImageFile2(?File $imageFile2 = null): void
    {
        $this->imageFile2 = $imageFile2;

        if (null !== $imageFile2) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile2(): ?File
    {
        return $this->imageFile2;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile1
     */
    public function setImageFile3(?File $imageFile3 = null): void
    {
        $this->imageFile3 = $imageFile3;

        if (null !== $imageFile3) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile3(): ?File
    {
        return $this->imageFile3;
    }
}
