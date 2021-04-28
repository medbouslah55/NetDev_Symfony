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
    public $tri = '';
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
    public function getq(): ?string
    {
        return $this->q;
    }

    public function gettri(): ?string
    {
        return $this->tri;
    }

    public function __toString()
    {
        return (string) $this->getq();
    }
    public function toArray()
    {
        return [$this->q , $this->tri];
    }
}