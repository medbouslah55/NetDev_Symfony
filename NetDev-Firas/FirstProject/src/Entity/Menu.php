<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="FK_menu_regime", columns={"id_regime"})})
 * @ORM\Entity(repositoryClass="App\Repository\MenuRepository")
 */
class Menu
{
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
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_jour", type="integer", nullable=true)
     */
    private $numJour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matin", type="string", length=255, nullable=true)
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
     */
    private $totalCalories;

    /**
     * @var \Regime
     *
     * @ORM\ManyToOne(targetEntity="Regime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_regime", referencedColumnName="id_regime")
     * })
     */
    private $idRegime;

    public function getIdMenu(): ?int
    {
        return $this->idMenu;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNumJour(): ?int
    {
        return $this->numJour;
    }

    public function setNumJour(?int $numJour): self
    {
        $this->numJour = $numJour;

        return $this;
    }

    public function getMatin(): ?string
    {
        return $this->matin;
    }

    public function setMatin(?string $matin): self
    {
        $this->matin = $matin;

        return $this;
    }

    public function getMatinImg(): ?string
    {
        return $this->matinImg;
    }

    public function setMatinImg(?string $matinImg): self
    {
        $this->matinImg = $matinImg;

        return $this;
    }

    public function getDejeuner(): ?string
    {
        return $this->dejeuner;
    }

    public function setDejeuner(?string $dejeuner): self
    {
        $this->dejeuner = $dejeuner;

        return $this;
    }

    public function getDejeunerImg(): ?string
    {
        return $this->dejeunerImg;
    }

    public function setDejeunerImg(?string $dejeunerImg): self
    {
        $this->dejeunerImg = $dejeunerImg;

        return $this;
    }

    public function getDinner(): ?string
    {
        return $this->dinner;
    }

    public function setDinner(?string $dinner): self
    {
        $this->dinner = $dinner;

        return $this;
    }

    public function getDinnerImg(): ?string
    {
        return $this->dinnerImg;
    }

    public function setDinnerImg(?string $dinnerImg): self
    {
        $this->dinnerImg = $dinnerImg;

        return $this;
    }

    public function getTotalCalories(): ?int
    {
        return $this->totalCalories;
    }

    public function setTotalCalories(?int $totalCalories): self
    {
        $this->totalCalories = $totalCalories;

        return $this;
    }

    public function getIdRegime(): ?Regime
    {
        return $this->idRegime;
    }

    public function setIdRegime(?Regime $idRegime): self
    {
        $this->idRegime = $idRegime;

        return $this;
    }


}
