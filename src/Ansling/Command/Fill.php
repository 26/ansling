<?php

namespace Ansling\Command;

class Fill implements Command
{
    public static function execute(int $number, string $value): array
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
        return [self::TYPE_INT, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}