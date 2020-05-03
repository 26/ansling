<?php

namespace Ansling\Command;

class RightTrimOne implements Command
{
    public function execute(string $input, string $mask): string
    {
        if (in_array(mb_substr($input, -1), str_split($mask))) {
            $input = mb_substr($input, 0, -1);
        }

        return $input;
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