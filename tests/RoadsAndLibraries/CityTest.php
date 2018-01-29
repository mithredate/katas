<?php
/**
 * Filename: CityTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class CityTest extends TestCase
{
    public function testShouldHaveANumber()
    {
        $city = new City(1);

        $this->assertEquals(1, $city->getNumber());
    }

    public function testAddAdjacentCity()
    {
        $city = new City(1);

        $adjacentCity = m::mock(City::class);
        $city->addAdjacentCity($adjacentCity);

        $this->assertEquals([$adjacentCity], $city->getAdjacentCities());
    }
}