<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * Regime
 *
 * @ORM\Table(name="regime")
 * @ORM\Entity
 */
class Regime
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_regime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegime;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Membre", inversedBy="idRegime")
     * @ORM\JoinTable(name="suivre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_regime", referencedColumnName="id_regime")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cin_membre", referencedColumnName="cin")
     *   }
     * )
     */
    private $cinMembre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cinMembre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getid(): ?int
    {
        return $this->idRegime;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getIdRegime(): ?int
    {
        return $this->idRegime;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Membre[]
     */
    public function getCinMembre(): Collection
    {
        return $this->cinMembre;
    }

    public function addCinMembre(Membre $cinMembre): self
    {
        if (!$this->cinMembre->contains($cinMembre)) {
            $this->cinMembre[] = $cinMembre;
        }

        return $this;
    }

    public function removeCinMembre(Membre $cinMembre): self
    {
        $this->cinMembre->removeElement($cinMembre);

        return $this;
    }

}
