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

    public function getQueenRow()
    {
        return $this->queen->getRow();
    }

    public function getQueenCol()
    {
        return $this->queen->getCol();
    }

    public function numberOfValidCellsToMoveRight()
    {
        $numberOfMovesToRight = 0;

        $queenRow = $this->getQueenRow();
        $queenCol = $this->getQueenCol();
        $boardDimension = $this->getBoardDimension();
        for ($i = 1; $i <= $boardDimension - $queenCol; $i++) {
            if($this->board->hasObstacle($queenRow, $queenCol + $i)) {
                break;
            }
            $numberOfMovesToRight++;
        }

        return $numberOfMovesToRight;

    }
}