<?php

namespace App\Data;

use App\Entity\Reservation;


class SearchData
{
    /**
     * @var string
     */
    public $q = '';

    public function getq(): ?string
    {
        return $this->q;
    }

    public function __toString()
    {
        return (string) $this->getq();
    }
}