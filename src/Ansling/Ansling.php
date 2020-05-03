<?php

namespace Ansling;

/**
 * Class Ansling
 * @package Ansling
 */
class Ansling
{
    const COMMANDS = [
        'B' => Command\Linebreak::class,
        'R' => Command\RandomLetter::class,
        'D' => Command\RandomDigit::class,
        'A' => Command\Alphabet::class,
        'S' => Command\Whitespace::class,
        'E' => Command\EmptyString::class,
        '.' => Command\Concatenate::class,
        'l' => Command\Length::class,
        'r' => Command\Repeat::class,
        'v' => Command\Replace::class,
        'j' => Command\Join::class,
        's' => Command\Split::class,
        'p' => Command\Pad::class,
        't' => Command\Trim::class,
        'ra' => Command\ReverseArray::class,
        'ss' => Command\SubString::class,
        'tr' => Command\Translate::class,
        'uc' => Command\Uppercase::class,
        'lc' => Command\Lowercase::class,
        'to' => Command\TrimOne::class,
        'lt' => Command\LeftTrim::class,
        'lto' => Command\LeftTrimOne::class,
        'rt' => Command\RightTrim::class,
        'rto' => Command\RightTrimOne::class,
        'ucf' => Command\UppercaseFirst::class,
        'lcf' => Command\LowercaseFirst::class,
        'rev' => Command\Reverse::class,
        'wrap' => Command\Wrap::class,
        'sort' => Command\Sort::class,
        'ssplit' => Command\StringSplit::class
    ];

    /**
     * @var array The abstract syntax tree constructed by the parser.
     */
    private $ast;

    /**
     * Ansling constructor.
     *
     * @param string $input
     * @throws AnslingParseException
     */
    public function __construct(string $input)
    {
        spl_autoload_register(function (string $class) {
            $namespaces = explode('\\', $class);
            array_shift($namespaces);

            include_once(sprintf("%s/%s.php", __DIR__, implode('/', $namespaces)));
        });

        $this->ast = (new AnslingParser(self::COMMANDS))->parse($input);
    }

    /**
     * @throws AnslingRuntimeException
     */
    public function interpret(): string
    {
        return (new AnslingInterpreter())->interpret($this->ast);
    }
}