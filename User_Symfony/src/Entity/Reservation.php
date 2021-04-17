<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="FK_reservation_act", columns={"id_act"}), @ORM\Index(name="FK_reservation_membre", columns={"cin_membre"}), @ORM\Index(name="FK_reservation_panier", columns={"id_panier"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cin_membre", type="integer", nullable=true)
     */
    private $cinMembre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_act", type="date", nullable=false)
     */
    private $dateAct;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_place", type="integer", nullable=false)
     */
    private $nbPlace;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_act", type="integer", nullable=true)
     */
    private $idAct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=true)
     */
    private $idPanier;

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCinMembre(): ?int
    {
        return $this->cinMembre;
    }

    public function setCinMembre(?int $cinMembre): self
    {
        $this->cinMembre = $cinMembre;

        return $this;
    }

    public function getDateAct(): ?\DateTimeInterface
    {
        return $this->dateAct;
    }

    public function setDateAct(\DateTimeInterface $dateAct): self
    {
        $this->dateAct = $dateAct;

        return $this;
    }

    public function getNbPlace(): ?int
    {
        return $this->nbPlace;
    }

    public function setNbPlace(int $nbPlace): self
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    public function getIdAct(): ?int
    {
        return $this->idAct;
    }

    public function setIdAct(?int $idAct): self
    {
        $this->idAct = $idAct;

        return $this;
    }

    public function getIdPanier(): ?int
    {
        return $this->idPanier;
    }

    public function setIdPanier(?int $idPanier): self
    {
        $this->idPanier = $idPanier;

        return $this;
    }


}
