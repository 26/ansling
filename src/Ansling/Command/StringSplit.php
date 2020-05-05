<?php

namespace Ansling\Command;

use Ansling\AnslingRuntimeException;

class StringSplit implements Command
{
    public function execute(string $input, int $length): array
    {
        $result = str_split($input, $length);

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