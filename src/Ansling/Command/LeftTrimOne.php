<?php

namespace Ansling\Command;

class LeftTrimOne implements Command
{
    public function execute(string $value, string $mask): string
    {
        if (in_array(mb_substr($value, 0, 1), str_split($mask))) {
            return mb_substr($value, 1);
        }

        return $value;
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
        return [self::TYPE_STRING, self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING;
    }
}