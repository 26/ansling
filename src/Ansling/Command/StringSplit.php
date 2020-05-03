<?php

namespace Ansling\Command;

class StringSplit implements Command
{
    public function execute(string $input): array
    {
        return str_split($input);
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
        return [self::TYPE_STRING];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_ARRAY;
    }
}