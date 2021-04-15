<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="FK_act_centre", columns={"id_centre"}), @ORM\Index(name="FK_act_coach", columns={"cin_coach"})})
 * @ORM\Entity(repositoryClass="App\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_act", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorie_act", type="string", length=20, nullable=true)
     */
    private $categorieAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_act", type="string", length=20, nullable=true)
     */
    private $nomAct;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_reservation", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixReservation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_act", type="string", length=10, nullable=true)
     */
    private $dateAct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_coach", referencedColumnName="cin")
     * })
     */
    private $cinCoach;

    public function getIdAct(): ?int
    {
        return $this->idAct;
    }

    public function getCategorieAct(): ?string
    {
        return $this->categorieAct;
    }

    public function setCategorieAct(?string $categorieAct): self
    {
        $this->categorieAct = $categorieAct;

        return $this;
    }

    public function getNomAct(): ?string
    {
        return $this->nomAct;
    }

    public function setNomAct(?string $nomAct): self
    {
        $this->nomAct = $nomAct;

        return $this;
    }

    public function getPrixReservation(): ?float
    {
        return $this->prixReservation;
    }

    public function setPrixReservation(?float $prixReservation): self
    {
        $this->prixReservation = $prixReservation;

        return $this;
    }

    public function getDateAct(): ?string
    {
        return $this->dateAct;
    }

    public function setDateAct(?string $dateAct): self
    {
        $this->dateAct = $dateAct;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(?int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
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

    public function getIdCentre(): ?Centre
    {
        return $this->idCentre;
    }

    public function setIdCentre(?Centre $idCentre): self
    {
        $this->idCentre = $idCentre;

        return $this;
    }

    public function getCinCoach(): ?Coach
    {
        return $this->cinCoach;
    }

    public function setCinCoach(?Coach $cinCoach): self
    {
        $this->cinCoach = $cinCoach;

        return $this;
    }


}
