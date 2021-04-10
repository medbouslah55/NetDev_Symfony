<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="FK_menu_regime", columns={"id_regime"})})
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_menu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_jour", type="integer", nullable=true)
     */
    private $numJour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matin", type="string", length=255, nullable=true)
     */
    private $matin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matin_img", type="string", length=255, nullable=true)
     */
    private $matinImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dejeuner", type="string", length=255, nullable=true)
     */
    private $dejeuner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dejeuner_img", type="string", length=255, nullable=true)
     */
    private $dejeunerImg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dinner", type="string", length=255, nullable=true)
     */
    private $dinner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dinner_img", type="string", length=255, nullable=true)
     */
    private $dinnerImg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_calories", type="integer", nullable=true)
     */
    private $totalCalories;

    /**
     * @var \Regime
     *
     * @ORM\ManyToOne(targetEntity="Regime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_regime", referencedColumnName="id_regime")
     * })
     */
    private $idRegime;


}
