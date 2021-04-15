<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="FK_evt_centre", columns={"id_centre"})})
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPub;

    /**
     * @var string
     *
     * @ORM\Column(name="date_pub", type="string", length=255, nullable=false)
     */
    private $datePub;

    /**
     * @var string
     *
     * @ORM\Column(name="date_even", type="string", length=255, nullable=false)
     */
    private $dateEven;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255, nullable=false)
     */
    private $sujet;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;

    public function getIdPub(): ?int
    {
        return $this->idPub;
    }

    public function getDatePub(): ?string
    {
        return $this->datePub;
    }

    public function setDatePub(string $datePub): self
    {
        $this->datePub = $datePub;

        return $this;
    }

    public function getDateEven(): ?string
    {
        return $this->dateEven;
    }

    public function setDateEven(string $dateEven): self
    {
        $this->dateEven = $dateEven;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

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


}
