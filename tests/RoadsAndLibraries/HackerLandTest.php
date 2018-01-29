<?php
/**
 * Filename: HackerLandTeest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class HackerLandTest extends TestCase
{
    public function testHackerLandCities()
    {
        $city1 = m::mock(City::class);
        $city2 = m::mock(City::class);

        $hackerLand = new HackerLand();
        $hackerLand->addCity($city1);
        $hackerLand->addCity($city2);

        $this->assertEquals([], $hackerLand->getAdjacentCities());
    }

    public function testAdjacentCities()
    {
        $city1 = m::mock(City::class);
        $city2 = m::mock(City::class);

        $hackerLand = new HackerLand();
        $hackerLand->addCity($city1);
        $hackerLand->addCity($city2);

        $road = m::mock(Road::class);
        $road->shouldReceive('getFrom')->once()->andReturn($city1);
        $road->shouldReceive('getTo')->once()->andReturn($city2);

        $city1->shouldReceive('addAdjacentCity')->once()->with($city2);
        $city2->shouldReceive('addAdjacentCity')->once()->with($city1);

        $hackerLand->addRoad($road);

        $this->assertEquals([[$city1, $city2]], $hackerLand->getAdjacentCities());
    }
}