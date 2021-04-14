<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="App\Repository\MembreRepository")
 */
class Membre
{
    /**
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     * @ORM\Id
     *
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     * @Assert\Length(
     *      min = 4,
     *      max = 16,
     *      minMessage = "Your nom  must be at least {{ limit }} characters long",
     *      maxMessage = "Your prenom  cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     * @Assert\Length(
     *      min = 4,
     *      max = 16,
     *      minMessage = "Your prenom  must be at least {{ limit }} characters long",
     *      maxMessage = "Your prenom  cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=50, nullable=false)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datee", type="date", nullable=false)
     */
    private $datee;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=false)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     * *@Assert\Email(message="Cette adresse mail n'est pas valide ")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var int
     *
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

    /**
     * @return int
     */
    public function getCin(): ?int
    {
        return $this->cin;
    }

    /**
     * @param int $cin
     * @return Membre
     */
    public function setCin(?int $cin): Membre
    {
        $this->cin = $cin;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Membre
     */
    public function setNom(string $nom): Membre
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return Membre
     */
    public function setPrenom(string $prenom): Membre
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return string
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     * @return Membre
     */
    public function setSexe(string $sexe): Membre
    {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatee(): ?\DateTime
    {
        return $this->datee;
    }

    /**
     * @param \DateTime $datee
     * @return Membre
     */
    public function setDatee(\DateTime $datee): Membre
    {
        $this->datee = $datee;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaille(): ?float
    {
        return $this->taille;
    }

    /**
     * @param float $taille
     * @return Membre
     */
    public function setTaille(float $taille): Membre
    {
        $this->taille = $taille;
        return $this;
    }

    /**
     * @return float
     */
    public function getPoids(): ?float
    {
        return $this->poids;
    }

    /**
     * @param float $poids
     * @return Membre
     */
    public function setPoids(float $poids): Membre
    {
        $this->poids = $poids;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Membre
     */
    public function setEmail(string $email): Membre
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Membre
     */
    public function setPassword(string $password): Membre
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    /**
     * @param int $telephone
     * @return Membre
     */
    public function setTelephone(int $telephone): Membre
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


}
