<?php

declare(strict_types=1);

namespace Types;

class LowerCaseTypes
{
    public function stringToInt(string $string): int
    {
        return (int) $string;
    }

    public function returnString(): string
    {
        return 'foo';
    }
}
