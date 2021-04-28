<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivre
 *
 * @ORM\Table(name="suivre", indexes={@ORM\Index(name="FK_suivre_membre", columns={"cin_membre"}), @ORM\Index(name="id_regime", columns={"id_regime"})})
 * @ORM\Entity
 */
class Suivre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_regime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idRegime;

    /**
     * @var int
     *
     * @ORM\Column(name="cin_membre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cinMembre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_deb", type="date", nullable=true)
     */
    private $dateDeb;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_jour_restant", type="integer", nullable=false)
     */
    private $nbJourRestant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    public function getIdRegime(): ?int
    {
        return $this->idRegime;
    }

    public function getCinMembre(): ?int
    {
        return $this->cinMembre;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(?\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getNbJourRestant(): ?int
    {
        return $this->nbJourRestant;
    }

    public function setNbJourRestant(int $nbJourRestant): self
    {
        $this->nbJourRestant = $nbJourRestant;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }


}
