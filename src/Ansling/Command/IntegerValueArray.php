<?php

namespace Ansling\Command;

class IntegerValueArray implements Command
{
    public function execute(array $values): array
    {
        return array_map(function(string $value): int {
            return intval($value);
        }, $values);
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
        return [self::TYPE_STRING_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_INTEGER_ARRAY;
    }
}