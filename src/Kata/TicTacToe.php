<?php

namespace Kata;

class TicTacToe
{
    private Field $field;

    public function __construct()
    {
        $this->field = new Field();
    }

    public function takeAField(Symbol $symbol, Coordinates $coordinates): void
    {
        $this->field->putSymbolInCoordinates($symbol, $coordinates);
    }

    public function gameLiveScore(): Field
    {
        return $this->field;
    }
}
