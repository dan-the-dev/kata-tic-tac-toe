<?php

namespace Kata;

class TicTacToe
{
    private Board $field;

    public function __construct()
    {
        $this->field = new Board();
    }

    public function takeAField(Symbol $symbol, Coordinates $coordinates): void
    {
        $this->field->putSymbolInCoordinates($symbol, $coordinates);
    }

    public function gameLiveScore(): Board
    {
        return $this->field;
    }
}
