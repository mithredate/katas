<?php
/**
 * Filename: Game.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


class Game
{
    /**
     * @var Queen
     */
    private $queen;
    /**
     * @var Board
     */
    private $board;

    /**
     * Game constructor.
     */
    public function __construct()
    {
    }

    public function setBoard(Board $board)
    {
        $this->board = $board;
    }

    public function getBoardDimension()
    {
        return $this->board->getDimension();
    }

    public function setQueen(Queen $queen)
    {
        $this->queen = $queen;
    }

    public function getQueenLocation()
    {
        return $this->queen->getLocation();
    }
}