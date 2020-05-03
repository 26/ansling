<?php

$start = microtime(true);

error_reporting(1);

if ($argc < 2) {
    echo "\e[1mansling: \e[1;31mfatal error: \e[0mno input files\n";
    exit;
}

if ($argc > 3) {
    echo "\e[1mansling: \e[1;31mfatal error: \e[0mtoo many arguments\n";
    exit;
}

$input_path = sprintf("%s/%s", getcwd(), $argv[1]);
$contents = file_get_contents($input_path);

if ($contents === false) {
    echo sprintf("\e[1mansling: \e[1;31mfatal error: \e[0mcould not open input file `%s`\n", $input_path);
    exit;
}

require_once __DIR__ . '/Ansling/Ansling.php';

try {
    $ansling = new Ansling\Ansling($contents);
    $result  = $ansling->interpret();
} catch(Ansling\AnslingException $e) {
    echo $e->getMessage();
    exit;
}

$output_file = $argc === 3 ? $argv[2] : "ansling.out";
$output_path = sprintf("%s/%s", getcwd(), $output_file);

if (file_put_contents($output_path, (string)$result, LOCK_EX) === false) {
    echo sprintf("\e[1mansling: \e[1;31mfatal error: \e[0mcould not write to file `%s`\n", $output_path);
    exit;
}

$duration = round(microtime(true) - $start, 3);
echo sprintf("Done (%ss)\n", $duration);