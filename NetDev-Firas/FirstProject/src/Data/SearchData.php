<?php


namespace App\Data;


use App\Entity\Abonnement;

class SearchData
{
    /**
     * @var int
     */
    public $page = 1;
    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Abonnement[]
     */
    public $abonnements = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var null|integer
     */
    public $min;

    /**
     * @var boolean
     */
    public $promo = false;

    public function __toString()
    {
        return (string) $this->q;
    }
}