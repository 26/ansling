<?php

namespace Ansling\Command;

class LeftTrimOneArray implements Command
{
    public function execute(array $values, array $mask): array
    {
        return array_map(function(string $value, string $mask): string {
            if (in_array(mb_substr($value, 0, 1), str_split($mask))) {
                return mb_substr($value, 1);
            }

            return $value;
        }, $values, $mask);
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
        return [self::TYPE_ARRAY, self::TYPE_ARRAY];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}