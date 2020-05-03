<?php

namespace Ansling\Command;

class Pad implements Command
{
    public static function execute(string $input, int $length, string $padding): string
    {
        return str_pad($input, $length, $padding);
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 3;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING, self::TYPE_INT, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_INT;
    }
}