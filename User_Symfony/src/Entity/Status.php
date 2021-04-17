<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status", indexes={@ORM\Index(name="FK_status_centre", columns={"id_centre"})})
 * @ORM\Entity
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
     * @var string
     *
     * @ORM\Column(name="date_pub", type="string", length=255, nullable=false)
     */
    private $datePub;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=false)
     */
    private $text;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_centre", type="integer", nullable=true)
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getIdCentre(): ?int
    {
        return $this->idCentre;
    }

    public function setIdCentre(?int $idCentre): self
    {
        $this->idCentre = $idCentre;

        return $this;
    }


}
