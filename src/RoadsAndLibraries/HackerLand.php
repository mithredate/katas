<?php
/**
 * Filename: HackerLand.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;


class HackerLand
{
    private $cities;
    private $roads;
    private $adjacentCities;

    /**
     * HackerLand constructor.
     */
    public function __construct()
    {
        $this->cities = [];
        $this->roads = [];
        $this->adjacentCities = [];
    }

    public function addCity(City $city)
    {
        $this->cities[] = $city;
        $this->adjacentCities[] = [$city->getNumber() => $city];
    }

    public function getAdjacentCities()
    {
        return $this->adjacentCities;
    }

    public function addRoad(Road $road)
    {
        $this->roads[] = $road;

        $from = $road->getFrom();
        $to = $road->getTo();
        $from->addAdjacentCity($to);
        $to->addAdjacentCity($from);

        $fromGroup = 0;
        $toGroup = 0;

        foreach ($this->adjacentCities as $group => $adjacentCity) {
            if(array_key_exists($from->getNumber(), $adjacentCity)) {
                $fromGroup = $group;
            }
            if(array_key_exists($to->getNumber(), $adjacentCity)) {
                $toGroup = $group;
            }
        }

        if($fromGroup == $toGroup) {
        } elseif(sizeof($this->adjacentCities[$fromGroup]) >= sizeof($this->adjacentCities[$toGroup])) {
            $this->adjacentCities[$fromGroup][$to->getNumber()] = $to;
            unset($this->adjacentCities[$toGroup]);
        } else {
            $this->adjacentCities[$toGroup][$from->getNumber()] = $from;
            unset($this->adjacentCities[$fromGroup]);
        }
    }

    public function getCities()
    {
        return $this->cities;
    }
}