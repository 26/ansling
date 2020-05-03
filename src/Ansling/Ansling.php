<?php

namespace Ansling;

/**
 * Class Ansling
 * @package Ansling
 */
class Ansling
{
    const COMMANDS = [
        '$' => Command\Replace::class,
        '*' => Command\Repeat::class,
        '.' => Command\Concatenate::class,
        '..' => Command\ConcatenateArray::class,
        'A' => Command\Alphabet::class,
        'B' => Command\Linebreak::class,
        'D' => Command\RandomDigit::class,
        'E' => Command\EmptyString::class,
        'R' => Command\RandomLetter::class,
        'S' => Command\Whitespace::class,
        'chunk' => Command\StringSplit::class,
        'count' => Command\Count::class,
        'fill' => Command\Fill::class,
        'flip' => Command\ReverseArray::class,
        'intval' => Command\IntegerValue::class,
        'join' => Command\Join::class,
        'length' => Command\Length::class,
        'lower' => Command\Lowercase::class,
        'lowerfirst' => Command\LowercaseFirst::class,
        'ltrim' => Command\LeftTrim::class,
        'ltrimo' => Command\LeftTrimOne::class,
        'pad' => Command\Pad::class,
        'range' => Command\Range::class,
        'reverse' => Command\Reverse::class,
        'rtrim' => Command\RightTrim::class,
        'rtrimo' => Command\RightTrimOne::class,
        'sort' => Command\Sort::class,
        'split' => Command\Split::class,
        'stringval' => Command\StringValue::class,
        'sub' => Command\SubString::class,
        'tr' => Command\Translate::class,
        'trim' => Command\Trim::class,
        'trimo' => Command\TrimOne::class,
        'upper' => Command\Uppercase::class,
        'upperfirst' => Command\UppercaseFirst::class,
        'wc' => Command\WordCount::class,
        'wrap' => Command\Wrap::class
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