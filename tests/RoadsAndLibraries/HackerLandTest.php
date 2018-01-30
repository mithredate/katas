<?php
/**
 * Filename: HackerLandTeest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;

use Mockery as m;

class HackerLandTest extends RoadAndLibrariesTestCase
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
        $city1 = $this->getCityMockWithNumber(1);
        $city2 = $this->getCityMockWithNumber(2);

        $hackerLand = new HackerLand();
        $hackerLand->addCity($city1);
        $hackerLand->addCity($city2);

        $road = $this->getRoadMock($city1, $city2);

        $hackerLand->addRoad($road);

        $this->assertEquals([[1 => $city1, 2 => $city2]], $hackerLand->getAdjacentCities());
    }

    public function testMoreComplexCityMap()
    {
        $city1 = $this->getCityMockWithNumber(1);
        $city2 = $this->getCityMockWithNumber(2);
        $city3 = $this->getCityMockWithNumber(3);
        $city4 = $this->getCityMockWithNumber(4);
        $city5 = $this->getCityMockWithNumber(5);
        $city6 = $this->getCityMockWithNumber(6);
        $city7 = $this->getCityMockWithNumber(7);
        $city8 = $this->getCityMockWithNumber(8);

        $hackerLand = new HackerLand();
        $hackerLand->addCity($city1);
        $hackerLand->addCity($city2);
        $hackerLand->addCity($city3);
        $hackerLand->addCity($city4);
        $hackerLand->addCity($city5);
        $hackerLand->addCity($city6);
        $hackerLand->addCity($city7);
        $hackerLand->addCity($city8);

        $road12 = $this->getRoadMock($city1, $city2);
        $road23 = $this->getRoadMock($city2, $city3);
        $road13 = $this->getRoadMock($city1, $city3);
        $road17 = $this->getRoadMock($city1, $city7);
        $road56 = $this->getRoadMock($city5, $city6);
        $road68 = $this->getRoadMock($city6, $city8);

        $hackerLand->addRoad($road12);
        $hackerLand->addRoad($road23);
        $hackerLand->addRoad($road13);
        $hackerLand->addRoad($road17);
        $hackerLand->addRoad($road56);
        $hackerLand->addRoad($road68);

        $this->assertEquals([[1 => $city1, 2 => $city2, 3 => $city3, 7 => $city7], [5 => $city5, 6 => $city6, 8 => $city8]], $hackerLand->getAdjacentCities());
    }
}