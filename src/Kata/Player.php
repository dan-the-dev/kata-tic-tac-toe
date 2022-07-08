<?php
declare(strict_types=1);

namespace Kata;

final class Player
{
    private string $nickname;
    private Symbol $symbol;

    public function __construct(string $nickname, Symbol $symbol)
    {
        $this->nickname = $nickname;
        $this->symbol = $symbol;
    }

    public function symbol(): string
    {
        return $this->symbol->getValue();
    }

}