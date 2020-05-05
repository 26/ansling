<?php

namespace Ansling\Command;

class TrimOneArray implements Command
{
    public function execute(array $values, array $masks): array
    {
        return array_map(function(string $value, string $mask): string {
            if (in_array(mb_substr($value, 0, 1), str_split($mask))) {
                $value = mb_substr($value, 1);
            }

            if (in_array(mb_substr($value, -1), str_split($mask))) {
                $value = mb_substr($value, 0, -1);
            }

            return $value;
        }, $values, $masks);
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