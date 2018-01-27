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
        $this->game->setBoard($this->getBoardMockWithDimension(8));
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
        $this->game->setBoard($this->getBoardMockWithDimension(1));

        $this->mockQueenAt(1, 1);

        $this->assertEquals(0, $this->game->numberOfValidCellsToMoveRight());
    }

    public function testMoveRightIn8CellGameWithNoObstacles()
    {
        $board = $this->getBoardMockWithDimension(8);
        $board->shouldReceive('hasObstacle')->times(3)->withAnyArgs()->andReturn(false);
        $this->game->setBoard($board);

        $this->mockQueenAt(6, 5);

        $this->assertEquals(3, $this->game->numberOfValidCellsToMoveRight());
    }

    public function testMoveRightIn8CellGameWith1ObstacleAtRight()
    {
        $this->mockQueenAt(2, 2);

        $board = $this->getBoardMockWithDimension(8);
        $board->shouldReceive('hasObstacle')->once()->withArgs([2, 5])->andReturn(true);
        $board->shouldReceive('hasObstacle')->times(5)->withAnyArgs()->andReturn(false);
        $this->game->setBoard($board);

        $this->assertEquals(2, $this->game->numberOfValidCellsToMoveRight());
    }

    public function testMoveLeftIn8CellGameWithNoObstacles()
    {
        $this->mockQueenAt(4, 6);

        $board = $this->getBoardMockWithDimension(8);
        $board->shouldReceive('hasObstacle')->times(5)->withAnyArgs()->andReturn(false);
        $this->game->setBoard($board);

        $this->assertEquals(5, $this->game->numberOfValidCellsToMoveLeft());
    }

    public function testMoveLeftIn8CellGameWithObstacles()
    {
        $this->mockQueenAt(4, 7);

        $board = $this->getBoardMockWithDimension(8);
        $board->shouldReceive('hasObstacle')->once()->withArgs([4, 3])->andReturn(true);
        $board->shouldReceive('hasObstacle')->times(5)->withAnyArgs()->andReturn(false);
        $this->game->setBoard($board);

        $this->assertEquals(3, $this->game->numberOfValidCellsToMoveLeft());
    }

    public function testMoveUpWithNoObstacle()
    {
        $this->mockQueenAt(3, 7);

        $board = $this->getBoardMockWithDimension(8);
        $board->shouldReceive('hasObstacle')->times(5)->withAnyArgs()->andReturn(false);
        $this->game->setBoard($board);

        $this->assertEquals(5, $this->game->numberOfValidCellsToMoveUp());
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

    /**
     * @param $dimension
     *
     * @return m\MockInterface
     */
    private function getBoardMockWithDimension($dimension): m\MockInterface
    {
        return m::mock(Board::class, function($mock) use ($dimension) {
            $mock->shouldReceive('getDimension')->once()->andReturn($dimension);
        });
    }

}