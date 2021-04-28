<?php

namespace App\Entity;

use DateTime;
use App\Entity\Coach;
use App\Entity\Centre;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var string
     * @Assert\NotBlank(message = "Le champs catégorie est vide ")
     * @ORM\Column(name="categorie_act", type="string", length=20, nullable=true)
     */
    private $categorieAct;

    /**
     * @var string|null
     *@Assert\NotBlank(message = "Le champs nom est vide ")
     * @ORM\Column(name="nom_act", type="string", length=20, nullable=true)
     */
    private $nomAct;

    /**
     * @var float|null
     * @Assert\Type(type="float", message = "La valeur {{ value }} doit être de type {{ type }}")
     * @Assert\NotBlank(message = "Le champs prix réservation est vide ")
     * @ORM\Column(name="prix_reservation", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixReservation;

    /**
     *@Assert\NotBlank(message = "Le champs date est vide ")
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
     * @Assert\GreaterThanOrEqual("2021-04-29",message = "La date doit être supérieure à celle d aujourd hui ")
     * @ORM\Column(name="date_act", type="string", length=10, nullable=true)
     */
    private $dateAct;

    /**
     * @var int|null
     * @Assert\Type(type="integer")
     *@Assert\NotBlank(message = "Le champs capacité est vide ")
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var string|null
     *@Assert\NotBlank(message = "Le champs description est vide ")
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre",inversedBy="idacts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach",inversedBy="idActs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_coach", referencedColumnName="cin")
     * })
     */
    private $cinCoach;

    /**
     * @return int
     */
    public function getIdAct(): ?int
    {
        return $this->idAct;
    }

    /**
     * @param int $idAct
     */
    public function setIdAct(int $idAct): void
    {
        $this->idAct = $idAct;
    }

    /**
     * @return string|null
     */
    public function getCategorieAct(): ?string
    {
        return $this->categorieAct;
    }

    /**
     * @param string|null $categorieAct
     */
    public function setCategorieAct(?string $categorieAct): void
    {
        $this->categorieAct = $categorieAct;
    }

    /**
     * @return string|null
     */
    public function getNomAct(): ?string
    {
        return $this->nomAct;
    }

    /**
     * @param string|null $nomAct
     */
    public function setNomAct(?string $nomAct): void
    {
        $this->nomAct = $nomAct;
    }

    /**
     * @return float|null
     */
    public function getPrixReservation(): ?float
    {
        return $this->prixReservation;
    }

    /**
     * @param float|null $prixReservation
     */
    public function setPrixReservation(?float $prixReservation): void
    {
        $this->prixReservation = $prixReservation;
    }


    public function getDateAct(): ?string
    {//$date = date_create_from_format('Y-M-d', $this->dateAct);
       //$date->getTimestamp();
       // $d = strtotime($this->dateAct) ;
       // return date('Y-M-d', $d);
       // $date = new DateTime($this->dateAct);
        return $this->dateAct ;
    }


    public function setDateAct(?string $dateAct): void
    {
        $this->dateAct = $dateAct;
       // $this->dateAct = '20'.strval($dateAct);
    }

    /**
     * @return int|null
     */
    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    /**
     * @param int|null $capacite
     */
    public function setCapacite(?int $capacite): void
    {
        $this->capacite = $capacite;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }


    public function getIdCentre(): ?Centre
    {
        return $this->idCentre;
    }


    public function setIdCentre(Centre $idCentre): self
    {
        $this->idCentre = $idCentre;
        return $this;
    }


    public function getCinCoach(): ?Coach
    {
        return $this->cinCoach;
    }

    public function setCinCoach(Coach $cinCoach): self
    {
        $this->cinCoach = $cinCoach;
        return $this;
    }

    public function __toString()
    {
        return (string) $this->getNomAct();
    }
}
