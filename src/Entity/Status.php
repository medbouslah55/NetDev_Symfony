<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Status
 *
 * @ORM\Table(name="status", indexes={@ORM\Index(name="FK_status_centre", columns={"id_centre"})})
 * @ORM\Entity(repositoryClass="App\Repository\StatusRepository")
 */
class Status
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
     * @var string
     * @Assert\Length(
     *      min = 10,
     *      max = 50,
     *      minMessage = "votre sujet doit comporter au minimum {{ limit }} characters",
     *      maxMessage = "votre sujet ne doit pas depasser {{ limit }} characters",
     *      allowEmptyString = false
     *     )
     * @ORM\Column(name="text", type="string", length=255, nullable=false)
     */
    private $text;

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



    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
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
