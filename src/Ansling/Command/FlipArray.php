<?php

namespace Ansling\Command;

class FlipArray implements Command
{
    public static function execute(array $input): array
    {
        return array_reverse($input);
    }

    /**
     * @inheritDoc
     */
    public static function getArity(): int
    {
        return 1;
    }

    /**
     * @inheritDoc
     */
    public static function getArgumentTypes(): array
    {
        return [self::TYPE_MIXED_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_MIXED_ARRAY;
    }
}