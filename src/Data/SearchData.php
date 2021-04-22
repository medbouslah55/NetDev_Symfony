<?php

namespace App\Data;

use App\Entity\Reservation;


class SearchData
{
    /**
     * @var string
     */
    public $q = '';

    public $tri = '';

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
        return [$this->getq() , $this->gettri()];
    }
}