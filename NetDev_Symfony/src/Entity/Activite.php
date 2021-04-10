<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="FK_act_centre", columns={"id_centre"}), @ORM\Index(name="FK_act_coach", columns={"cin_coach"})})
 * @ORM\Entity
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_act", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorie_act", type="string", length=20, nullable=true)
     */
    private $categorieAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_act", type="string", length=20, nullable=true)
     */
    private $nomAct;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_reservation", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixReservation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_act", type="string", length=10, nullable=true)
     */
    private $dateAct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_coach", referencedColumnName="cin")
     * })
     */
    private $cinCoach;


}
