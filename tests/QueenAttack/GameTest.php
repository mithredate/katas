<?php
/**
 * Filename: GameTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{

    /**
     * @var Game
     */
    private $game;

    protected function setUp()
    {
        $this->game = new Game();
    }

    public function testSetDimensionOnGame()
    {
        $this->game->setBoard(m::mock(Board::class, function($mock) {
            $mock->shouldReceive('getDimension')->once()->andReturn(8);
        }));
        $this->assertEquals(8, $this->game->getBoardDimension());
    }

    public function testSetQueen()
    {
        $this->game->setQueen(m::mock(Queen::class, function ($mock) {
            $mock->shouldReceive('getRow')->once()->andReturn(4);
            $mock->shouldReceive('getCol')->once()->andReturn(6);
        }));

        $this->assertEquals(4, $this->game->getQueenLocationX());
        $this->assertEquals(6, $this->game->getQueenLocationY());
    }

    public function testNumberOfValidCellsToMoveRight()
    {
        $this->game->setQueen(m::mock(Queen::class));

        $this->assertEquals(3, $this->game->numberOfValidCellsToMoveRight());
    }

}