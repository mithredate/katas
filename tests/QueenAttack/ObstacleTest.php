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

    public function testLocatedAt()
    {
        $obstacle = new Obstacle(1, 3);
        $this->assertTrue($obstacle->isLocatedAt(1, 3));
    }

}