<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Centre
 *
 * @ORM\Table(name="centre")
 * @ORM\Entity(repositoryClass="App\Repository\CentreRepository")
 * @UniqueEntity("nomCentre",message="Le nom saisit est attribué à un autre centre.")
 * @UniqueEntity("telCentre",message="Le numéro saisit est attribué à un autre centre.")
 * @UniqueEntity("mailCentre",message="L'adresse mail saisite est attribuée à un autre centre.")
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
     * @Assert\NotBlank(message = "Le champs nom du centre est vide ")
     * @ORM\Column(name="nom_centre", type="string", length=30, nullable=false)
     */
    private $nomCentre;

    /**
     * @var string
     *@Assert\NotBlank(message = "Le champs numéro est vide ")
     * * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Regex(pattern="/^(?:9|5|2)[0-9]*$/", message="Veuillez saisir que des chiffres et le numéro doit commencer par 2 ou 9 ou 5")
     * @ORM\Column(name="tel_centre", type="string", length=8, nullable=false)
     */
    private $telCentre;




    /**
     * @var string
     *@Assert\NotBlank(message = "Le champs mail est vide ")
     * @Assert\Email(
     *     message = "Votre adresse '{{ value }}' n est pas valide"
     * )
     * @ORM\Column(name="mail_centre", type="string", length=30, nullable=false)
     */
    private $mailCentre;

    /**
     * @var string
     *@Assert\NotBlank(message = "Le champs adresse est vide ")
     * @ORM\Column(name="adr_centre", type="string", length=50, nullable=false)
     */
    private $adrCentre;

    /**
     * @var string
     *@Assert\NotBlank(message = "Le champs type du centre est vide ")
     * @ORM\Column(name="type_centre", type="string", length=30, nullable=false)
     */
    private $typeCentre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Activite",mappedBy="idCentre")
     */
    private $idacts;




    public function __construct()
    {
        $this->idacts = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdCentre(): ?int
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
     * @return string
     */
    public function getNomCentre(): ?string
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
    public function getTelCentre(): ?string
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
    public function getMailCentre(): ?string
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
    public function getAdrCentre(): ?string
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
    public function getTypeCentre(): ?string
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

    /**
     * @return Collection|Activite[]
     */
    public function getIdacts(): ?Collection
    {
        return $this->idacts;
    }

    /**
     * @param mixed $idacts
     */
    public function setIdacts($idacts): void
    {
        $this->idacts = $idacts;
    }

    public function addIdact(Activite $idact): self
    {
        if (!$this->idacts->contains($idact)) {
            $this->idacts[] = $idact;
            $idact->setIdCentre($this);
        }

        return $this;
    }

    public function removeIdact(Activite $idact): self
    {
        if ($this->idacts->removeElement($idact)) {
            // set the owning side to null (unless already changed)
            if ($idact->getIdCentre() === $this) {
                $idact->setIdCentre(null);
            }
        }

        return $this;
    }


}
