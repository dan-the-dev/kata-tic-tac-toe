<?php
declare(strict_types=1);

namespace Kata;

final class Field
{
    private array $field;

    CONST DEFAULT_FIELD = [
        ['', '', ''],
        ['', '', ''],
        ['', '', ''],
    ];

    public function __construct(array $field = self::DEFAULT_FIELD)
    {
        $this->field = $field;
    }

    public function putSymbolInCoordinates(Symbol $symbol, Coordinates $coordinates): void
    {
        $this->field[$coordinates->getX()][$coordinates->getY()] = $symbol->getValue();
    }
}