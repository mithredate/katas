<?php
/**
 * Filename: City.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;


class City
{
    private $number;

    /**
     * City constructor.
     *
     * @param int $number
     */
    public function __construct($number)
    {
        $this->number = $number;
        $this->adjacentCities = [];
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getAdjacentCities()
    {
        return $this->adjacentCities;
    }

    public function addAdjacentCity($adjacentCity)
    {
        $this->adjacentCities[] = $adjacentCity;
    }
}