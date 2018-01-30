<?php
/**
 * Filename: LibraryBuilderTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;

use Mockery as m;

class LibraryBuilderTest extends RoadsAndLibrariesTestCase
{
    public function testCountForOnceCity()
    {
        $hackerLand = m::mock(HackerLand::class);
        $city1 = $this->getCityMockWithNumber(1);
        $hackerLand->shouldReceive('getAdjacentCities')->once()->andReturn([[1 => $city1]]);

        $libraryBuilder = new LibraryBuilder($hackerLand, 5, 2);

        $this->assertEquals(5, $libraryBuilder->getTotalCost());
    }

    public function testTotalCostForMoreExpensiveRoads()
    {
        $hackerLand = m::mock(HackerLand::class);
        $city1 = $this->getCityMockWithNumber(1);
        $city2 = $this->getCityMockWithNumber(2);
        $hackerLand->shouldReceive('getCities')->once()->andReturn([$city1, $city2]);
        $libraryBuilder = new LibraryBuilder($hackerLand, 2, 5);

        $this->assertEquals(4, $libraryBuilder->getTotalCost());
    }

    public function testTotalCostForAComplexHackerLand()
    {
        $hackerLand = m::mock(HackerLand::class);
        $city1 = $this->getCityMockWithNumber(1);
        $city2 = $this->getCityMockWithNumber(2);
        $city3 = $this->getCityMockWithNumber(3);
        $city4 = $this->getCityMockWithNumber(4);
        $city5 = $this->getCityMockWithNumber(5);
        $city6 = $this->getCityMockWithNumber(6);
        $city7 = $this->getCityMockWithNumber(7);
        $city8 = $this->getCityMockWithNumber(8);

        $hackerLand->shouldReceive('getAdjacentCities')->once()->andReturn([
            [1 => $city1, 2 => $city2, 3 => $city3, 7 => $city7],
            [5 => $city5, 6 => $city6, 8 => $city8]
        ]);

        $libraryBuilder = new LibraryBuilder($hackerLand, 5, 2);

        $this->assertEquals(20, $libraryBuilder->getTotalCost());
    }
}