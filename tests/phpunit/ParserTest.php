<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

spl_autoload_register(function (string $class) {
    include_once(sprintf("%s/../../src/%s.php", __DIR__, implode('/', explode('\\', $class))));
});

class ParserTest extends TestCase
{
    /**
     * Tests the parser tokenizer.
     */
    public function testTokenizer()
    {
        $parser = new Ansling\AnslingParser(\Ansling\Ansling::COMMANDS);

        $tokens = $parser->tokenize('. "Hello \" world" "Lorem ipsum\""');
        $this->assertEquals([
            ['.', \Ansling\AnslingParser::COMMAND],
            ['"Hello \" world"', \Ansling\AnslingParser::STRING],
            ['"Lorem ipsum\""', \Ansling\AnslingParser::STRING]
        ], $tokens);

        $tokens = $parser->tokenize('r "Hello \\\\ world"');
        $this->assertEquals([
            ['r', \Ansling\AnslingParser::COMMAND],
            ['"Hello \\\\ world"', \Ansling\AnslingParser::STRING],
        ], $tokens);

        $tokens = $parser->tokenize('. "Hello \\\\" "world"');
        $this->assertEquals([
            ['.', \Ansling\AnslingParser::COMMAND],
            ['"Hello \\\\"', \Ansling\AnslingParser::STRING],
            ['"world"', \Ansling\AnslingParser::STRING]
        ], $tokens);

        $tokens = $parser->tokenize("r\n\"Hello\n\nWorld\"");
        $this->assertEquals([
            ['r', \Ansling\AnslingParser::COMMAND],
            ["\"Hello\n\nWorld\"", \Ansling\AnslingParser::STRING]
        ], $tokens);

        $tokens = $parser->tokenize('r ""');
        $this->assertEquals([
            ['r', \Ansling\AnslingParser::COMMAND],
            ['""', \Ansling\AnslingParser::STRING]
        ], $tokens);
    }

    /**
     * Tests if the parser does not freak out if the input is empty.
     */
    public function testParseTokensEmpty()
    {
        $parser = new Ansling\AnslingParser(\Ansling\Ansling::COMMANDS);
        $this->assertEquals([], $parser->parse(''));
    }

    /**
     * Tests if the parser can handle a bare string.
     */
    public function testParseTokensString()
    {
        $parser = new Ansling\AnslingParser(\Ansling\Ansling::COMMANDS);
        $this->assertEquals('"Lorem ipsum!"', $parser->parse('"Lorem ipsum!"'));
    }

    /**
     * Tests if the parser can parse a relatively simple expression.
     */
    public function testParseTokensSimple()
    {
        $parser = new Ansling\AnslingParser(\Ansling\Ansling::COMMANDS);
        $this->assertEquals(['.', '"Lorem"', '"ipsum!"'], $parser->parse('. "Lorem" "ipsum!"'));
    }

    /**
     * Tests if the parser can parse a relatively simple nested expression.
     */
    public function testParseTokensNestedSimple()
    {
        $parser = new Ansling\AnslingParser(\Ansling\Ansling::COMMANDS);
        $this->assertEquals(['.', ['.', '"Lorem"', '"ipsum"'], '"dolor!"'], $parser->parse('. . "Lorem" "ipsum" "dolor!"'));
    }
}