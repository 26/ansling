<?php

namespace Ansling\Command;

class WordCountArray implements Command
{
    public static function execute(array $sentences): array
    {
        return array_map(function(string $sentence): int {
            return str_word_count($sentence);
        }, $sentences);
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