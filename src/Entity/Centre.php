<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity="App\Entity\Evenement",mappedBy="idCentre")
     */
    private $idevts;

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

    public function __construct()
    {
        $this->idevts = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdCentre(): int
    {
        return $this->idCentre;
    }

    /**
     * @param int $idCentre
     */
    public function setIdCentre(int $idCentre): void
    {
        $this->idCentre = $idCentre;
    }

    /**
     * @return  Collection|Evenement[]
     * * @return  Collection|Status[]
     */
    public function getIdevts():?Collection
    {
        return $this->idevts;
    }

    /**
     * @param mixed $idevts
     */
    public function setIdevts($idevts): void
    {
        $this->idevts = $idevts;
    }

    /**
     * @return string
     */
    public function getNomCentre(): string
    {
        return $this->nomCentre;
    }

    /**
     * @param string $nomCentre
     */
    public function setNomCentre(string $nomCentre): void
    {
        $this->nomCentre = $nomCentre;
    }

    /**
     * @return string
     */
    public function getTelCentre(): string
    {
        return $this->telCentre;
    }

    /**
     * @param string $telCentre
     */
    public function setTelCentre(string $telCentre): void
    {
        $this->telCentre = $telCentre;
    }

    /**
     * @return string
     */
    public function getMailCentre(): string
    {
        return $this->mailCentre;
    }

    /**
     * @param string $mailCentre
     */
    public function setMailCentre(string $mailCentre): void
    {
        $this->mailCentre = $mailCentre;
    }

    /**
     * @return string
     */
    public function getAdrCentre(): string
    {
        return $this->adrCentre;
    }

    /**
     * @param string $adrCentre
     */
    public function setAdrCentre(string $adrCentre): void
    {
        $this->adrCentre = $adrCentre;
    }

    /**
     * @return string
     */
    public function getTypeCentre(): string
    {
        return $this->typeCentre;
    }

    /**
     * @param string $typeCentre
     */
    public function setTypeCentre(string $typeCentre): void
    {
        $this->typeCentre = $typeCentre;
    }

    public function addIdevt(Evenement $idevt): self
    {
        if (!$this->idevts->contains($idevt)) {
            $this->idevts[] = $idevt;
            $idevt->setIdCentre($this);
        }

        return $this;
    }

    public function removeIdevt(Evenement $idevt): self
    {
        if ($this->idevts->removeElement($idevt)) {
            // set the owning side to null (unless already changed)
            if ($idevt->getIdCentre() === $this) {
                $idevt->setIdCentre(null);
            }
        }

        return $this;
    }



}
