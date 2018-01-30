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

        $libraryBuilder = new LibraryBuilder($hackerLand, 2, 5);

        $this->assertEquals(2, $libraryBuilder->getTotalCost());
    }
}