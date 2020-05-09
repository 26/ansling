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
        '$*' => Command\ReplaceArray::class,
        '*' => Command\Repeat::class,
        '**' => Command\RepeatArray::class,
        '.' => Command\Concatenate::class,
        '.*' => Command\ConcatenateArray::class,
        'A' => Command\Alphabet::class,
        'B' => Command\Linebreak::class,
        'D' => Command\RandomDigit::class,
        'E' => Command\EmptyString::class,
        'R' => Command\RandomLetter::class,
        'S' => Command\Whitespace::class,
        'chunk' => Command\StringSplit::class,
        'chunk*' => Command\StringSplitArray::class,
        'count' => Command\Count::class,
        'count*' => Command\CountArray::class,
        'fill' => Command\Fill::class,
        'fillint' => Command\FillInt::class,
        'filter' => Command\Filter::class,
        'flip' => Command\FlipArray::class,
        'if' => Command\IfNotEmpty::class,
        'if*' => Command\IfNotEmptyArray::class,
        'ifeq' => Command\IfEquals::class,
        'ifeq*' => Command\IfEqualsArray::class,
        'intval' => Command\IntegerValue::class,
        'intval*' => Command\IntegerValueArray::class,
        'join' => Command\Join::class,
        'join*' => Command\JoinArray::class,
        'length' => Command\Length::class,
        'length*' => Command\LengthArray::class,
        'lower' => Command\Lowercase::class,
        'lower*' => Command\LowercaseArray::class,
        'lowerfirst' => Command\LowercaseFirst::class,
        'lowerfirst*' => Command\LowercaseFirstArray::class,
        'ltrim' => Command\LeftTrim::class,
        'ltrim*' => Command\LeftTrimArray::class,
        'ltrimo' => Command\LeftTrimOne::class,
        'ltrimo*' => Command\LeftTrimOneArray::class,
        'pad' => Command\Pad::class,
        'pad*' => Command\PadArray::class,
        'range' => Command\Range::class,
        'regex' => Command\Regex::class,
        'regex*' => Command\RegexArray::class,
        'reverse' => Command\Reverse::class,
        'reverse*' => Command\ReverseArray::class,
        'rtrim' => Command\RightTrim::class,
        'rtrim*' => Command\RightTrimArray::class,
        'rtrimo' => Command\RightTrimOne::class,
        'rtrimo*' => Command\RightTrimOneArray::class,
        'sort' => Command\Sort::class,
        'split' => Command\Split::class,
        'split*' => Command\SplitArray::class,
        'stringval' => Command\StringValue::class,
        'stringval*' => Command\StringValueArray::class,
        'sub' => Command\SubString::class,
        'sub*' => Command\SubStringArray::class,
        'tr' => Command\Translate::class,
        'trim' => Command\Trim::class,
        'trim*' => Command\TrimArray::class,
        'trimo' => Command\TrimOne::class,
        'trimo*' => Command\TrimOneArray::class,
        'upper' => Command\Uppercase::class,
        'upper*' => Command\UppercaseArray::class,
        'upperfirst' => Command\UppercaseFirst::class,
        'upperfirst*' => Command\UppercaseFirstArray::class,
        'wc' => Command\WordCount::class,
        'wc*' => Command\WordCountArray::class,
        'wrap' => Command\Wrap::class,
        'wrap*' => Command\WrapArray::class
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