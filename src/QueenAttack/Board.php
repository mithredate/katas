<?php
/**
 * Filename: Board.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


class Board
{
    /**
     * @var int
     */
    private $dimension;

    /**
     * Board constructor.
     *
     * @param int $dimension
     */
    public function __construct($dimension)
    {

        $this->dimension = $dimension;
    }

    public function getDimension()
    {
        return $this->dimension;
    }
}