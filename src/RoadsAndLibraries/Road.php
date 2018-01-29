<?php
/**
 * Filename: Road.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;


class Road
{
    /**
     * @var City
     */
    private $from;
    /**
     * @var City
     */
    private $to;

    /**
     * Road constructor.
     *
     * @param City $from
     * @param City $to
     */
    public function __construct($from, $to)
    {

        $this->from = $from;
        $this->to = $to;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getTo()
    {
        return $this->to;
    }


}