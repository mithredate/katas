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
        $this->mockQueenAt(4, 6);

        $this->assertEquals(4, $this->game->getQueenRow());
        $this->assertEquals(6, $this->game->getQueenCol());
    }

    public function testMoveRightIn1CellGame()
    {
        $this->game->setBoard(m::mock(Board::class, function ($mock) {
            $mock->shouldReceive('getDimension')->once()->andReturn(1);
        }));

        $this->mockQueenAt(1, 1);

        $this->assertEquals(0, $this->game->numberOfValidCellsToMoveRight());
    }

    public function testMoveRightIn8CellGameWithNoObstacles()
    {
        $this->game->setBoard(m::mock(Board::class, function ($mock) {
            $mock->shouldReceive('getDimension')->once()->andReturn(8);
            $mock->shouldReceive('hasObstacle')->times(3)->withAnyArgs()->andReturn(false);
        }));

        $this->mockQueenAt(6, 5);

        $this->assertEquals(3, $this->game->numberOfValidCellsToMoveRight());
    }

    /**
     * @param $row
     * @param $col
     */
    private function mockQueenAt($row, $col): void
    {
        $this->game->setQueen(m::mock(Queen::class, function ($mock) use ($row, $col) {
            $mock->shouldReceive('getRow')->once()->andReturn($row);
            $mock->shouldReceive('getCol')->once()->andReturn($col);
        }));
    }

}