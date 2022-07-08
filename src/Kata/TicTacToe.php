<?php

namespace Kata;

class TicTacToe
{
    private array $field = [
        [
            'X', '', ''
        ],
        [
            '', '', ''
        ],
        [
            '', '', ''
        ],
    ];

    public function takeAField(string $player, int $x, int $y): void
    {
        //
    }

    public function gameLiveScore(): array
    {
        return $this->field;
    }
}
