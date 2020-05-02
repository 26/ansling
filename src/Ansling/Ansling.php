<?php

namespace Ansling;

/**
 * Class Ansling
 * @package Ansling
 */
class Ansling
{
    const COMMANDS = [
        '.' => Command\ConcatenateCommand::class,
        'r' => Command\ReverseCommand::class
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
        if (is_string($this->ast)) {
            return self::formatString($this->ast);
        }
    }

    /**
     * @param string $input
     * @return string
     */
    private static function formatString(string $input): string
    {
        return substr(strtr($input, [
            '\\"' => '"',
            '\\\\' => '\\'
        ]), 1, -1);
    }
}