<?php
/**
 * Filename: RoadTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class RoadTest extends TestCase
{
    public function testConnectTwoCities()
    {
        $city1 = m::mock(City::class);
        $city2 = m::mock(City::class);

        $road = new Road($city1, $city2);
        $this->assertEquals($road->getFrom(), $city1);
        $this->assertEquals($road->getTo(), $city2);
    }
}