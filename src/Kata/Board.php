<?php
declare(strict_types=1);

namespace Kata;

final class Board
{
    private array $board;

    CONST DEFAULT_FIELD = [
        ['', '', ''],
        ['', '', ''],
        ['', '', ''],
    ];

    public function __construct(array $board = self::DEFAULT_FIELD)
    {
        $this->board = $board;
    }

    /**
     * @throws AlreadyTakenFieldException
     */
    public function putSymbolInCoordinates(Symbol $symbol, Coordinates $coordinates): void
    {
        if ($this->isFieldAlreadyTaken($coordinates)) {
            throw new AlreadyTakenFieldException();
        }
        $this->putInCoordinates($coordinates, $symbol->getValue());
    }

    private function isFieldAlreadyTaken(Coordinates $coordinates): bool
    {
        return $this->board[$coordinates->getX()][$coordinates->getY()] !== '';
    }

    private function putInCoordinates(Coordinates $coordinates, string $string): void
    {
        $this->board[$coordinates->getX()][$coordinates->getY()] = $string;
    }
}