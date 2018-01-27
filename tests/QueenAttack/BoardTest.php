<?php
/**
 * Filename: BoardTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


use PHPUnit\Framework\TestCase;

class BoardTest extends TestCase
{

    public function testNewBoardDimension()
    {
        $board = new Board(8);
        $this->assertEquals($board->getDimension(), 8);
    }

}