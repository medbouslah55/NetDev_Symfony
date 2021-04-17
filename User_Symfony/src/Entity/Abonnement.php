<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement", indexes={@ORM\Index(name="FK_abonnement_act", columns={"id_act"})})
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descr_ab", type="string", length=255, nullable=true)
     */
    private $descrAb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_act", type="integer", nullable=true)
     */
    private $idAct;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescrAb(): ?string
    {
        return $this->descrAb;
    }

    public function setDescrAb(?string $descrAb): self
    {
        $this->descrAb = $descrAb;

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


}
