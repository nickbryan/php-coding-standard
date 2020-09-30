<?php

declare(strict_types=1);

namespace Types;

class LowerCaseTypes
{
    public function stringToInt(String $string): int
    {
        return (Int) $string;
    }

    public function returnString(): String
    {
        return 'foo';
    }
}
