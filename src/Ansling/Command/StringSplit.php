<?php

namespace Ansling\Command;

class StringSplit implements Command
{
    public function execute(string $input, int $length): array
    {
        return str_split($input, $length);
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
        return [self::TYPE_STRING, self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}