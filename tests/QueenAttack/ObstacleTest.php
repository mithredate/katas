<?php
/**
 * Filename: Obstacle.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


use PHPUnit\Framework\TestCase;

class ObstacleTest extends TestCase
{

    public function testCreateInstance()
    {
        $obstacle = new Obstacle();
        $this->assertInstanceOf(Obstacle::class, $obstacle);
    }

}