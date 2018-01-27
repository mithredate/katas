<?php
/**
 * Filename: Board.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


class Board
{
    private $obstacles;
    private $dimension;

    /**
     * Board constructor.
     *
     * @param int $dimension
     */
    public function __construct($dimension)
    {

        $this->dimension = $dimension;
        $this->obstacles = [];
    }

    public function getDimension()
    {
        return $this->dimension;
    }

    public function addObstacle(Obstacle $obstacle)
    {
        $this->obstacles[] = $obstacle;
    }

    public function hasObstacle($row, $col)
    {
        foreach ($this->obstacles as $obstacle) {
            if($obstacle->isLocatedAt($row, $col)) {
                return true;
            }
        }

        return false;
    }
}