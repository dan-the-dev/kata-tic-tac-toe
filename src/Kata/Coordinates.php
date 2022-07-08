<?php
declare(strict_types=1);

namespace Kata;

final class Coordinates
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x - 1;
        $this->y = $y - 1;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

}