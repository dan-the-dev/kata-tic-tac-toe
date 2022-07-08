<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\TicTacToe;

class TicTacToeTest extends TestCase
{
    private TicTacToe $ticTacToe;

    protected function setUp(): void
    {
        $this->ticTacToe = new TicTacToe();
    }

    public function testPlayer1CanMakeFirstMoveInCoordinates11(): void
    {
        $this->ticTacToe->takeAField(new Symbol('X'), new Coordinates(1, 1));

        $actual = $this->ticTacToe->gameLiveScore();

        $expectedField = new Board([
            ['X', '', ''],
            ['', '', ''],
            ['', '', ''],
        ]);
        $this->assertEquals($expectedField, $actual);
    }

    public function testPlayer1CanMakeFirstMoveInCoordinates12(): void
    {
        $this->ticTacToe->takeAField(new Symbol('X'), new Coordinates(1, 2));

        $actual = $this->ticTacToe->gameLiveScore();

        $expectedField = new Board([
            ['', 'X', ''],
            ['', '', ''],
            ['', '', ''],
        ]);
        $this->assertEquals($expectedField, $actual);
    }
}
