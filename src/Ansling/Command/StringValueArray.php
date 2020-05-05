<?php

namespace Ansling\Command;

class StringValueArray implements Command
{
    public function execute(array $values): array
    {
        return array_map(function(int $value): string {
            return (string)$value;
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
        return [self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}