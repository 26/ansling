<?php

namespace Ansling\Command;

class WordCount implements Command
{
    public static function execute(string $sentence): int
    {
        return str_word_count($sentence);
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
        return self::TYPE_INT;
    }
}