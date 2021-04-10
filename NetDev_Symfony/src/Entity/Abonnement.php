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
     * @var \Activite
     *
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_act", referencedColumnName="id_act")
     * })
     */
    private $idAct;


}
