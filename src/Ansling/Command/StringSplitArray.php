<?php

namespace Ansling\Command;

use Ansling\AnslingRuntimeException;

class StringSplitArray implements Command
{
    public function execute(array $values, int $length): array
    {
        return array_map(function(string $value, int $length) {
            $result = str_split($value, $length);

            if($result !== false) {
                return $result;
            }

            throw new AnslingRuntimeException(sprintf(
                "\n" .
                "\e[0;34m-- INVALID VALUE -----------------------------------------------------------------------------------\e[0m\n" .
                "\n" .
                "I expected argument 2 passed to the command `\e[0;34mchunk\e[0m` to be greater than `0`.\n" .
                "\n"
            ));
        }, $values, array_fill(0, count($values), $length));
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
        return [self::TYPE_STRING_ARRAY, self::TYPE_INT];
    }

    /**
     * @inheritDoc
     */
    public static function getReturnType(): string
    {
        return self::TYPE_STRING_ARRAY_ARRAY;
    }
}