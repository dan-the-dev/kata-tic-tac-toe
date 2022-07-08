<?php
declare(strict_types=1);

namespace Kata;

final class Field
{
    CONST DEFAULT_FIELD = [
        ['', '', ''],
        ['', '', ''],
        ['', '', ''],
    ];

    public function __construct(array $field = self::DEFAULT_FIELD)
    {
        $this->field = $field;
    }

    public function getField(): array
    {
        return $this->field;
    }

    public function setField(array $field): void
    {
        $this->field = $field;
    }


}