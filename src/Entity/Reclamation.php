<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * Reclamation
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="FK_reclamation_membre", columns={"cin_membre"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReclamationRepository")
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups ("reclamation")
     */
    private $id;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre Nom ne peut pas contenir des entiers"
     * )
     * @Assert\Type("string")
     * @Assert\NotNull
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Groups ("reclamation")
     */
    private $nom;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre Prénom ne peut pas contenir des entiers"
     * )
     * @Assert\Type("string")
     * @Assert\NotNull
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     * @Groups ("reclamation")
     */
    private $prenom;

    /**
     * @var string
     * @Assert\NotNull
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @Groups ("reclamation")
     */

    private $mail;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre Prénom ne peut pas contenir des entiers"
     * )
     * @Assert\Type("string")
     * @Assert\NotNull
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     * @Groups("reclamation")
     */
    private $type;

    /**
     * @var Date
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Groups("reclamation")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     * @Groups("reclamation")
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true, options={"default"="En cours"})
     * @Groups("reclamation")
     */
    private $etat = 'En cours';

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_membre", referencedColumnName="cin")
     * })
     * @Groups("reclamation")
     */
    private $cinMembre;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function setMail(string $mail): self
    {
        $this->mail = $mail;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getCinMembre(): ?Integer
    {
        return $this->cinMembre;
    }

    public function setCinMembre(?Integer $cinMembre): self
    {
        $this->cinMembre = $cinMembre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->nom;
        // to show the id of the Category in the select
        // return $this->id;
    }


}
