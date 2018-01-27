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

    public function testSetDimensionOnGame()
    {
        $game = new Game();
        $game->setBoard(m::mock(Board::class, function($mock) {
            $mock->shouldReceive('getDimension')->once()->andReturn(8);
        }));
        $this->assertEquals(8, $game->getBoardDimension());
    }

}