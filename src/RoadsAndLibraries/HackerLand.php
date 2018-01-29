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

    public function addCity($city)
    {
        $this->cities[] = $city;
    }

    public function getAdjacentCities()
    {
        return $this->adjacentCities;
    }

    public function addRoad(Road $road)
    {
        $this->roads[] = $road;

        $road->getFrom()->addAdjacentCity($road->getTo());
        $road->getTo()->addAdjacentCity($road->getFrom());

        $groupFound = false;
        for ($group = 0; $group < sizeof($this->adjacentCities); $group++) {
            if(in_array($road->getFrom(), $this->adjacentCities[$group])) {
                $this->adjacentCities[$group][] = $road->getTo();
                $groupFound = true;
            } elseif(in_array($road->getTo(), $this->adjacentCities[$group])) {
                $this->adjacentCities[$group][] = $road->getFrom();
                $groupFound = true;
            }

            if($groupFound) {
                break;
            }
        }

        if(! $groupFound) {
            $this->adjacentCities[] = [$road->getFrom(), $road->getTo()];
        }

    }
}