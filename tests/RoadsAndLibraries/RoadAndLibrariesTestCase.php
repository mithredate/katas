<?php
/**
 * Filename: RoadAndLibrariesTestCase.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\RoadsAndLibraries;


use Mockery as m;
use PHPUnit\Framework\TestCase;

class RoadAndLibrariesTestCase extends TestCase
{

    /**
     * @param $from
     * @param $to
     *
     * @return m\MockInterface
     */
    protected function getRoadMock($from, $to)
    {
        $road = m::mock(Road::class);
        $road->shouldReceive('getFrom')->once()->andReturn($from);
        $road->shouldReceive('getTo')->once()->andReturn($to);
        $from->shouldReceive('addAdjacentCity')->once()->with($to);
        $to->shouldReceive('addAdjacentCity')->once()->with($from);

        return $road;
    }

    /**
     * @param $cityNumber
     *
     * @return m\MockInterface
     */
    protected function getCityMockWithNumber($cityNumber): m\MockInterface
    {
        $city = m::mock(City::class);
        $city->shouldReceive('getNumber')->andReturn($cityNumber);

        return $city;
    }
}