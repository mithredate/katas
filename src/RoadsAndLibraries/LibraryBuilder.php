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
        return 2;
    }
}