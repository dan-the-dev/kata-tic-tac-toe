<?php

namespace Kata;

class TicTacToe
{
    private array $field = [
        ['', '', ''],
        ['', '', ''],
        ['', '', ''],
    ];

    public function takeAField(Player $player, Coordinates $coordinates): void
    {
        $this->field[$coordinates->getX()][$coordinates->getY()] = $player->getSymbol();
    }

    public function gameLiveScore(): array
    {
        return $this->field;
    }
}
