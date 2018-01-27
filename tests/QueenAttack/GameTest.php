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
            $mock->shouldReceive('getLocation')->once()->andReturn([4, 6]);
        }));

        $this->assertEquals([4, 6], $this->game->getQueenLocation());
    }

}