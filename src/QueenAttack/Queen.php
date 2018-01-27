<?php
/**
 * Filename: Queen.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


class Queen
{
    private $row;
    private $col;

    /**
     * Queen constructor.
     *
     * @param $row
     * @param $col
     */
    public function __construct($row, $col)
    {
        $this->row = $row;
        $this->col = $col;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function getCol()
    {
        return $this->col;
    }
}