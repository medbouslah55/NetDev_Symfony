<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
     *  @Assert\Date
     * @var string A "Y-m-d" formatted value
     *
     * @ORM\Column(name="date_pub", type="string", length=255, nullable=false)
     */
    private $datePub;

    /**
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
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
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "votre sujet doit comporter au minimum {{ limit }} characters",
     *      maxMessage = "votre sujet ne doit pas depasser {{ limit }} characters",
     *      allowEmptyString = false
     *     )
     * @Assert\NotBlank
     */
    private $sujet;


    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre",inversedBy="idevts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;

    /**
     * @return int
     */
    public function getIdPub(): ?int
    {
        return $this->idPub;
    }

    /**
     * @param int $idPub
     */
    public function setIdPub(int $idPub): void
    {
        $this->idPub = $idPub;
    }

    /**
     * @return string
     */
    public function getDatePub(): ?string
    {
        return $this->datePub;
    }

    /**
     * @param string $datePub
     */
    public function setDatePub(string $datePub): void
    {
        $this->datePub = $datePub;
    }

    /**
     * @return string
     */
    public function getDateEven(): ?string
    {
        return $this->dateEven;
    }

    /**
     * @param string $dateEven
     */
    public function setDateEven(string $dateEven): void
    {
        $this->dateEven = $dateEven;
    }


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    /**
     * @param string $sujet
     */
    public function setSujet(string $sujet): void
    {
        $this->sujet = $sujet;
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


}
