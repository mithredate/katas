<?php
/**
 * Filename: BoardTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


use Mockery as m;
use PHPUnit\Framework\TestCase;

class BoardTest extends TestCase
{

    private $board;


    protected function setUp()
    {
        $this->board = new Board(8);
    }

    public function testNewBoardDimension()
    {
        $this->assertEquals($this->board->getDimension(), 8);
    }

    public function testAddObstacle()
    {
        $this->board->addObstacle(m::mock(Obstacle::class, function ($mock) {
            $mock->shouldReceive('isLocatedAt')->withArgs([1, 3])->once()->andReturn(true);
        }));

        $this->assertTrue($this->board->hasObstacle(1, 3));
    }

}