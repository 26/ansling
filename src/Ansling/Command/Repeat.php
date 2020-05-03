<?php

namespace Ansling\Command;

class Repeat implements Command
{
    public static function execute(string $input, int $multiplier): string
    {
        return str_repeat($input, $multiplier);
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 2;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_STRING, self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}