<?php
/**
 * Filename: LibraryBuilder.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;


class LibraryBuilder
{
    /**
     * @var HackerLand
     */
    private $hackerLand;
    private $libCost;
    private $roadCost;

    /**
     * LibraryBuilder constructor.
     *
     * @param HackerLand $hackerLand
     * @param $libCost
     * @param $roadCost
     */
    public function __construct($hackerLand, $libCost, $roadCost)
    {

        $this->hackerLand = $hackerLand;
        $this->libCost = $libCost;
        $this->roadCost = $roadCost;
    }

    public function getTotalCost()
    {
        $libraries = 0;
        $roads = 0;
        if($this->libCost < $this->roadCost) {
            $libraries = count($this->hackerLand->getCities());
        } else {
            $adjacentCities = $this->hackerLand->getAdjacentCities();

            foreach ($adjacentCities as $group) {
                $roads += sizeof($group) - 1;
                $libraries++;
            }
        }

        return $libraries * $this->libCost + $roads * $this->roadCost;
    }
}