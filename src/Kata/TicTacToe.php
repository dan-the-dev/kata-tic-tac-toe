<?php

namespace Kata;

class TicTacToe
{
    private Field $field;

    public function __construct()
    {
        $this->field = new Field();
    }

    public function takeAField(Player $player, Coordinates $coordinates): void
    {
        $field = $this->field->getField();
        $field[$coordinates->getX()][$coordinates->getY()] = $player->getSymbol();
        $this->field->setField($field);
    }

    public function gameLiveScore(): Field
    {
        return $this->field;
    }
}
