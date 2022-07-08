<?php
declare(strict_types=1);

namespace Kata;

final class Board
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

    /**
     * @throws AlreadyTakenFieldException
     */
    public function putSymbolInCoordinates(Symbol $symbol, Coordinates $coordinates): void
    {
        if ($this->field[$coordinates->getX()][$coordinates->getY()] !== '') {
            throw new AlreadyTakenFieldException();
        }
        $this->field[$coordinates->getX()][$coordinates->getY()] = $symbol->getValue();
    }
}