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

    public function testGetLocation()
    {
        $queen = new Queen(1, 3);
        $this->assertEquals([1, 3], $queen->getLocation());
    }

}