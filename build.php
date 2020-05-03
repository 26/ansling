<?php

define("PHAR_NAME", "ansling.phar");
define("EXECUTABLE_NAME", "ansling");
define("PHAR_SOURCE", __DIR__ . "/src/");

print("Cleaning up...\n");

if (file_exists(PHAR_NAME)) {
    unlink(PHAR_NAME);
}

$phar = new Phar(PHAR_NAME);
$phar->startBuffering();

$default_stub = $phar->createDefaultStub('bootstrap.php', '/bootstrap.php');
$phar->buildFromDirectory(PHAR_SOURCE);

$stub = "#!/usr/bin/env php \n" . $default_stub;
$phar->setStub($stub);
$phar->stopBuffering();

rename(PHAR_NAME, EXECUTABLE_NAME);

print("Built successfully.\n");
