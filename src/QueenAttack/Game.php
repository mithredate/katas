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
        $numberOfMovesUpward = 0;

        for ($i = 1; $i <= $this->getBoardDimension() - $this->getQueenRow(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow() + $i, $this->getQueenCol())) {
                break;
            }
            $numberOfMovesUpward++;
        }

        return $numberOfMovesUpward;
    }

    public function numberOfValidCellsToMoveDown()
    {
        $numberOfMovesDownward = 0;

        for ($i = 1; $i < $this->getQueenRow(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow() - $i, $this->getQueenCol())) {
                break;
            }
            $numberOfMovesDownward++;
        }

        return $numberOfMovesDownward;
    }

    public function numberOfValidCellsToMoveOnPrimaryDiagonalUpward()
    {
        $numberOfMovesOnPrimaryDiagonalUpward = 0;

        for ($i = 1; $i <= $this->getBoardDimension() - $this->getQueenRow() && $i < $this->getQueenCol(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow() + $i, $this->getQueenCol() - $i)) {
                break;
            }
            $numberOfMovesOnPrimaryDiagonalUpward++;
        }

        return $numberOfMovesOnPrimaryDiagonalUpward;
    }

    public function numberOfValidCellsToMoveOnPrimaryDiagonalDownward()
    {
        $numberOfMovesOnPrimaryDiagonalDownward = 0;

        for ($i = 1; $i <= $this->getQueenRow() && $i < $this->getBoardDimension() - $this->getQueenCol(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow() - $i, $this->getQueenCol() + $i)) {
                break;
            }
            $numberOfMovesOnPrimaryDiagonalDownward++;
        }

        return $numberOfMovesOnPrimaryDiagonalDownward;
    }

    public function numberOfValidCellsToMoveOnSecondaryDiagonalUpward()
    {
        $numberOfMovesOnSecondaryDiagonalUpward = 0;

        for ($i = 1; $i <= $this->getBoardDimension() - $this->getQueenRow() && $i < $this->getBoardDimension() - $this->getQueenCol(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow() + $i, $this->getQueenCol() + $i)) {
                break;
            }
            $numberOfMovesOnSecondaryDiagonalUpward++;
        }

        return $numberOfMovesOnSecondaryDiagonalUpward;
    }

    public function numberOfValidCellsToMoveOnSecondaryDiagonalDownward()
    {
        $numberOfMovesOnSecondaryDiagonalDownward = 0;

        for ($i = 1; $i <= $this->getQueenRow() && $i < $this->getQueenCol(); $i++) {
            if($this->board->hasObstacle($this->getQueenRow() - $i, $this->getQueenCol() - $i)) {
                break;
            }
            $numberOfMovesOnSecondaryDiagonalDownward++;
        }

        return $numberOfMovesOnSecondaryDiagonalDownward;
    }
}