<?php

namespace App\Entity;

use App\Entity\Regime;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\Timestampable;
// use Symfony\Component\HttpFoundation\File\File;
// use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="FK_menu_regime", columns={"id_regime"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
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
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
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
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
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
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
     */
    private $matin;

    /**
     * 
     * @ORM\Column(name="matin_img", type="string", length=255, nullable=true)
     * @Assert\File(mimeTypes={ "image/jpeg" , "image/png",  "image/jpg" })
     * @Assert\NotBlank(message="veuillez uploader une image")
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
     */
    private $matinImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dejeuner", type="string", length=255, nullable=true)
     * @Assert\Length(min = 3, max = 30,
     * minMessage = "Dejeuner doit être au moins {{ limit }} caractères",
     * maxMessage = "Dejeuner doit être au maximum {{ limit }} caractères")
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
     */
    private $dejeuner;

    /**
     *
     * @ORM\Column(name="dejeuner_img", type="string", length=255, nullable=true)
     * @Assert\File(mimeTypes={ "image/jpeg" , "image/png",  "image/jpg" })
     * @Assert\NotBlank(message="veuillez uploader une image")
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
     */
    private $dejeunerImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dinner", type="string", length=255, nullable=true)
     * @Assert\Length(min = 3, max = 30,  
     * minMessage = "Dinner doit etre au moin {{ limit }} caractères",
     * maxMessage = "Dinner doit etre au maximum {{ limit }} caractères")
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
     */
    private $dinner;

    /**
     *
     * @ORM\Column(name="dinner_img", type="string", length=255, nullable=true)
     * @Assert\File(mimeTypes={ "image/jpeg" , "image/png",  "image/jpg" })
     * @Assert\NotBlank(message="veuillez uploader une image")
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
     */
    private $dinnerImg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_calories", type="integer", nullable=true)
     * @Assert\Positive
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
     */
    private $totalCalories;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Regime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_regime", referencedColumnName="id_regime")
     * })
     * @Assert\NotNull(message="veuillez remplir le champ obligatoire.")
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

    public function getMatinImg()
    {
        return $this->matinImg;
    }

    public function setMatinImg($matinImg)
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

    public function getDejeunerImg()
    {
        return $this->dejeunerImg;
    }

    public function setDejeunerImg($dejeunerImg)
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

    public function getDinnerImg()
    {
        return $this->dinnerImg;
    }

    public function setDinnerImg($dinnerImg)
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
}
