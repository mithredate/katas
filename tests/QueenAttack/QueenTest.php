<?php
/**
 * Filename: QueenTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


use PHPUnit\Framework\TestCase;

class QueenTest extends TestCase
{

    public function testNewQueen()
    {
        $queen = new Queen();
        $this->assertInstanceOf(Queen::class, $queen);
    }

}