<?php
declare(strict_types=1);

namespace Kata;

final class Symbol
{
    const X = 'x';
    const O = 'o';

    private string $value;

    public function __construct(string $symbol)
    {
        $this->value = $symbol;
    }

    public function getValue(): string
    {
        return $this->value;
    }

}