<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centre
 *
 * @ORM\Table(name="centre")
 * @ORM\Entity
 */
class Centre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_centre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_centre", type="string", length=30, nullable=false)
     */
    private $nomCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_centre", type="string", length=8, nullable=false)
     */
    private $telCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_centre", type="string", length=30, nullable=false)
     */
    private $mailCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_centre", type="string", length=50, nullable=false)
     */
    private $adrCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="type_centre", type="string", length=30, nullable=false)
     */
    private $typeCentre;

    public function getIdCentre(): ?int
    {
        return $this->idCentre;
    }

    public function getNomCentre(): ?string
    {
        return $this->nomCentre;
    }

    public function setNomCentre(string $nomCentre): self
    {
        $this->nomCentre = $nomCentre;

        return $this;
    }

    public function getTelCentre(): ?string
    {
        return $this->telCentre;
    }

    public function setTelCentre(string $telCentre): self
    {
        $this->telCentre = $telCentre;

        return $this;
    }

    public function getMailCentre(): ?string
    {
        return $this->mailCentre;
    }

    public function setMailCentre(string $mailCentre): self
    {
        $this->mailCentre = $mailCentre;

        return $this;
    }

    public function getAdrCentre(): ?string
    {
        return $this->adrCentre;
    }

    public function setAdrCentre(string $adrCentre): self
    {
        $this->adrCentre = $adrCentre;

        return $this;
    }

    public function getTypeCentre(): ?string
    {
        return $this->typeCentre;
    }

    public function setTypeCentre(string $typeCentre): self
    {
        $this->typeCentre = $typeCentre;

        return $this;
    }


}
