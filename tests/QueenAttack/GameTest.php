<?php
/**
 * Filename: GameTest.
 * User: Mithredate
 * Date: Jan, 2018
 */

namespace Mithredate\Hackerrank\QueenAttack;


use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{

    public function testNewGame()
    {
        $game = new Game();
        $this->assertInstanceOf(Game::class, $game);
    }

}