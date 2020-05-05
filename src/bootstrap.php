<?php

$start = microtime(true);

error_reporting(1);

if ($argc < 2) {
    echo "\e[1mansling: \e[1;31mfatal error: \e[0mno input given\n";
    exit;
}

$write_to_stdout = false;
$write_to_file   = null;

$options = getopt("i:o:r:");

if (isset($options['r']) && isset($options['i'])) {
    echo "\e[1mansling: \e[1;31mfatal error: \e[0mmultiple input sources\n";
    exit;
}

if (isset($options['r'])) {
    $input = $options['r'];

    if (!$input) {
        echo "\e[1mansling: \e[1;31mfatal error: \e[0mno input given\n";
        exit;
    }
} elseif (isset($options['i'])) {
    $input = file_get_contents($options['i']);

    if ($input === false) {
        echo sprintf("\e[1mansling: \e[1;31mfatal error: \e[0mcould not open file `%s`\n", $options['i']);
        exit;
    }
} else {
    echo sprintf("\e[1mansling: \e[1;31mfatal error: \e[0mno input given\n");
    exit;
}

if(isset($options['o'])) {
    $write_to_file = $options['o'];
} else {
    $write_to_stdout = true;
}

require_once __DIR__ . '/Ansling/Ansling.php';

try {
    $ansling = new Ansling\Ansling($input);
    $result  = $ansling->interpret();
} catch(Ansling\AnslingException $e) {
    echo $e->getMessage();
    exit;
}

if ($write_to_stdout) {
    echo $result . "\n";
} else {
    $output_path = sprintf("%s/%s", getcwd(), $write_to_file);

    if (file_put_contents($output_path, (string)$result, LOCK_EX) === false) {
        echo sprintf("\e[1mansling: \e[1;31mfatal error: \e[0mcould not write to file `%s`\n", $output_path);
        exit;
    }

    $duration = round(microtime(true) - $start, 3);
    echo sprintf("Done (%ss)\n", $duration);
}