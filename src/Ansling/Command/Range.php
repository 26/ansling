<?php

namespace Ansling\Command;

class Range implements Command
{
    public static function execute(int $start, int $end): array
    {
        return range($start, $end);
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
        return self::TYPE_ARRAY;
    }
}