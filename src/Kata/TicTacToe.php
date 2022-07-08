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

    public function takeAField(Player $player, Coordinates $coordinates): void
    {
        //
    }

    public function gameLiveScore(): array
    {
        return $this->field;
    }
}
