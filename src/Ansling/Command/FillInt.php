<?php

namespace Ansling\Command;

class FillInt implements Command
{
    public static function execute(int $number, int $value): array
    {
        return array_fill(0, $number, $value);
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
        return [self::TYPE_INT, self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_INTEGER_ARRAY;
    }
}