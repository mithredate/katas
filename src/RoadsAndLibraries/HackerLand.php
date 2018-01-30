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

        $from = $road->getFrom();
        $to = $road->getTo();
        $from->addAdjacentCity($to);
        $to->addAdjacentCity($from);

        $groupFound = false;
        for ($group = 0; $group < sizeof($this->adjacentCities); $group++) {
            $fromIsAlreadyInTheGroup = array_key_exists($from->getNumber(), $this->adjacentCities[$group]);
            $toIsAlreadyInTheGroup = array_key_exists($to->getNumber(), $this->adjacentCities[$group]);
            if($fromIsAlreadyInTheGroup && $toIsAlreadyInTheGroup) {
                $groupFound = true;
            } elseif($fromIsAlreadyInTheGroup) {
                $this->adjacentCities[$group][$to->getNumber()] = $to;
                $groupFound = true;
            } elseif($toIsAlreadyInTheGroup) {
                $this->adjacentCities[$group][$from->getNumber()] = $from;
                $groupFound = true;
            }

            if($groupFound) {
                break;
            }
        }

        if(! $groupFound) {
            $this->adjacentCities[] = [$from->getNumber() => $from, $to->getNumber() => $to];
        }

    }
}