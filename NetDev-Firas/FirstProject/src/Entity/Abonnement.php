<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Abonnement
 * @ORM\Table(name="abonnement", indexes={@ORM\Index(name="FK_abonnement_act", columns={"id_act"})})
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementRepository")
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
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre Titre ne peut pas contenir des entiers"
     * )
     * @Assert\Type("string")
     * @Assert\NotNull
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre Type ne peut pas contenir des entiers"
     * )
     * @Assert\NotNull
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var float
     * @Assert\NotNull
     * @Assert\Type("float")
     * @Assert\Positive
     * @Assert\Length(min=2,max=3)
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string|null
     * @Assert\NotNull
     * @Assert\Regex("/^\w+/")
     * @ORM\Column(name="descr_ab", type="string", length=255, nullable=true)
     */
    private $descrAb;

    /**
     * @var \Activite
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_act", referencedColumnName="id_act")
     * })
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

    public function getIdAct(): ?Activite
    {
        return $this->idAct;
    }

    public function setIdAct(?Activite $idAct): self
    {
        $this->idAct = $idAct;

        return $this;
    }


}
