<?php

namespace Kata;

class TicTacToe
{
    private Board $board;

    public function __construct(Board $board = new Board())
    {
        $this->board = $board;
    }

    public function takeAField(Symbol $symbol, Coordinates $coordinates): void
    {
        $this->board->putSymbolInCoordinates($symbol, $coordinates);
    }

    public function gameLiveScore(): Board
    {
        return $this->board;
    }
}
