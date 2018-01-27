<?php
/**
 * Filename: Obstacle.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


class Obstacle
{
    private $row;
    private $col;

    /**
     * Obstacle constructor.
     *
     * @param $row
     * @param $col
     */
    public function __construct($row, $col)
    {
        $this->row = $row;
        $this->col = $col;
    }

    public function isLocatedAt($row, $col)
    {
        return $this->row === $row && $this->col === $col;
    }
}