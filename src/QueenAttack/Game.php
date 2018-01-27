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

        for ($i = 1; $i <= $this->getBoardDimension() - $this->getQueenCol(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow(), $this->getQueenCol() + $i)) {
                break;
            }
            $numberOfMovesToRight++;
        }

        return $numberOfMovesToRight;

    }

    public function numberOfValidCellsToMoveLeft()
    {
        $numberOfMovesToLeft = 0;

        for ($i = 1; $i < $this->getQueenCol(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow(), $this->getQueenCol() - $i)) {
                break;
            }
            $numberOfMovesToLeft++;
        }

        return $numberOfMovesToLeft;
    }

    public function numberOfValidCellsToMoveUp()
    {
        $numberOfMovesToUp = 0;

        for ($i = 1; $i <= $this->getBoardDimension() - $this->getQueenRow(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow() + $i, $this->getQueenCol())) {
                break;
            }
            $numberOfMovesToUp++;
        }

        return $numberOfMovesToUp;
    }
}