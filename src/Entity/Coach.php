<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Coach
 *
 * @ORM\Table(name="coach")
 * @ORM\Entity(repositoryClass="App\Repository\CoachRepository")
 */
class Coach
{
    /**
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     * @ORM\Id
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Your Cin must be at least {{ limit }} characters long",
     *      maxMessage = "Your Cin cannot be longer than {{ limit }} characters",
     * )
     * @Assert\NotBlank(message = "Le champs numéro est vide ")
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
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters",
     * )
     * @Assert\NotBlank (message = "le champs est vide")
     *
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     * @Assert\Length(
     *      min = 4,
     *      max = 16,
     *      minMessage = "Your First Name must be at least {{ limit }} characters long",
     *      maxMessage = "Your First Name cannot be longer than {{ limit }} characters",
     * )
     *
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
     * @ORM\OneToMany(targetEntity="App\Entity\Activite", mappedBy="cinCoach")
     */
    private $idActs;

    public function getCin(): ?int
    {
        return $this->cin;
    }

    /**
     * @param int $cin
     */
    public function setCin(int $cin): void
    {
        $this->cin = $cin;
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

    /**
     * @return Collection|Activite[]
     */
    public function getIdActs(): ?Collection
    {
        return $this->idacts;
    }

    /**
     * @param mixed $idActs
     */
    public function setIdActs($idActs): void
    {
        $this->idActs = $idActs;
    }

    public function addIdAct(Activite $idAct): self
    {
        if (!$this->idActs->contains($idAct)) {
            $this->idActs[] = $idAct;
            $idAct->setCinCoach($this);
        }

        return $this;
    }

    public function removeIdAct(Activite $idAct): self
    {
        if ($this->idActs->removeElement($idAct)) {
            // set the owning side to null (unless already changed)
            if ($idAct->getCinCoach() === $this) {
                $idAct->setCinCoach(null);
            }
        }

        return $this;
    }
}
