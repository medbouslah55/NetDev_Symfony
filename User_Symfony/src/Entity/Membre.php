<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="App\Repository\MembreRepository")
 *
 */
class Membre implements UserInterface
{
    /**
     * @param int $cin
     */
    public function setCin(int $cin): void
    {
        $this->cin = $cin;
    }
    /**
     * @var int
     * @Groups("post:read")
     * @ORM\Column(name="cin", type="integer", nullable=false)
     * @ORM\Id
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Your Cin must be at least {{ limit }} characters long",
     *      maxMessage = "Your Cin cannot be longer than {{ limit }} characters",
     * )
     * @Assert\NotBlank(message = "Le champs numéro est vide ")
     */
    private $cin;

    /**
     * @var string
     * @Groups("post:read")
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     * @Assert\Length(
     *      min = 4,
     *      max = 16,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters",
     * )
     * @Assert\NotBlank (message = "le champs est vide")
     */
    private $nom;

    /**
     * @var string
     * @Groups("post:read")
     *@Assert\Length(
     *      min = 4,
     *      max = 16,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters",
     * )
     * @Assert\NotBlank (message = "le champs est vide")
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @Groups("post:read")
     * @ORM\Column(name="sexe", type="string", length=50, nullable=false)
     */
    private $sexe;

    /**
     * @var \DateTime
     * @Groups("post:read")
     * @ORM\Column(name="datee", type="date", nullable=false)
     */
    private $datee;

    /**
     * @var float
     * @Groups("post:read")
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=false)
     */
    private $taille;

    /**
     * @var float
     * @Groups("post:read")
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=false)
     */
    private $poids;

    /**
     * @var string
     * @Groups("post:read")
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     * @Groups("post:read")
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var int
     * @Groups("post:read")
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Regime", mappedBy="cinMembre")
     */
    private $idRegime;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRegime = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCin(): ?int
    {
        return $this->cin;
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

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDatee(): ?\DateTimeInterface
    {
        return $this->datee;
    }

    public function setDatee(\DateTimeInterface $datee): self
    {
        $this->datee = $datee;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdRegime()
    {
        return $this->idRegime;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idRegime
     * @return Membre
     */
    public function setIdRegime($idRegime)
    {
        $this->idRegime = $idRegime;
        return $this;
    }

    public function addIdRegime(Regime $idRegime): self
    {
        if (!$this->idRegime->contains($idRegime)) {
            $this->idRegime[] = $idRegime;
            $idRegime->addCinMembre($this);
        }

        return $this;
    }

    public function removeIdRegime(Regime $idRegime): self
    {
        if ($this->idRegime->removeElement($idRegime)) {
            $idRegime->removeCinMembre($this);
        }

        return $this;
    }

    public function __toString()
    {
        return (string)$this->cin;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }
    public function getRoles()
    {
        return ['ROLE_USER'];
    }
    public function getUsername()
    {
        return $this->nom;
    }
}
