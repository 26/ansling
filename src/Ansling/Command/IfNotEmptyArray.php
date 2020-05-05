<?php

namespace Ansling\Command;

class IfNotEmptyArray implements Command
{
    public static function execute(array $values, array $not_empty, array $empty): array
    {
        return array_map(function(string $value, string $value_not_empty, string $value_empty): string {
            return empty($value) ? $value_empty : $value_not_empty;
        }, $values, $not_empty, $empty);
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
        return [self::TYPE_ARRAY, self::TYPE_ARRAY, self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}