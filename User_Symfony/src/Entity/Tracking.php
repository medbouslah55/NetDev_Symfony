<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tracking
 *
 * @ORM\Table(name="tracking", indexes={@ORM\Index(name="FK_track_membre", columns={"cin_membre"})})
 * @ORM\Entity(repositoryClass="App\Repository\TrackingRepository")
 */
class Tracking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_track", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="old_poids", type="string", length=50, nullable=true)
     */
    private $oldPoids;

    /**
     * @var float|null
     *
     * @ORM\Column(name="imc", type="float", precision=10, scale=0, nullable=true)
     */
    private $imc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cin_membre", type="integer", nullable=true)
     */
    private $cinMembre;

    public function getIdTrack(): ?int
    {
        return $this->idTrack;
    }

    public function getOldPoids(): ?string
    {
        return $this->oldPoids;
    }

    public function setOldPoids(?string $oldPoids): self
    {
        $this->oldPoids = $oldPoids;

        return $this;
    }

    public function getImc(): ?float
    {
        return $this->imc;
    }

    public function setImc(?float $imc): self
    {
        $this->imc = $imc;

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


}
