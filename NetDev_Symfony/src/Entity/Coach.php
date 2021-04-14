<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Coach
 *
 * @ORM\Table(name="coach")
 * @ORM\Entity
 *
 */
class Coach
{
    /**
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     * @ORM\Id
     * @Assert\Regex(pattern="/^[0-9]*$/", message="Veuillez saisir que des numéros")
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @Assert\NotBlank(message = "Le champs numéro est vide ")
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Your cin  must be at least {{ limit }} characters long",
     *      maxMessage = "Your cin cannot be longer than {{ limit }} characters"
     * )
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     *      @Assert\Length(
     *      min = 4,
     *      max = 16,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters",
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
     *      minMessage = "Your Prenom  must be at least {{ limit }} characters long",
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
     * @return int
     */
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

    /**
     * @return string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Coach
     */
    public function setNom(string $nom): Coach
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
     * @return Coach
     */
    public function setPrenom(string $prenom): Coach
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
     * @return Coach
     */
    public function setSexe(string $sexe): Coach
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
     * @return Coach
     */
    public function setDatee(\DateTime $datee): Coach
    {
        $this->datee = $datee;
        return $this;
    }



}
