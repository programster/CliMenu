<?php

/*
 * Test that we can create and run a menu of possible values.
 */

require_once(__DIR__ . '/../vendor/autoload.php');

$possibleValues = array(
    new Programster\CliMenu\ValueOption("Hello world", "Hello world"),
    new Programster\CliMenu\ValueOption("Seconds in a day", (60 * 60 * 24)),
    new Programster\CliMenu\ValueOption("Ultimate answer", 42),
);

$valueMenu = new Programster\CliMenu\ValueMenu("Value Menu Number 1!", ...$possibleValues);

$chosenValue = $valueMenu->run();

print "The value for that option is: {$chosenValue}" . PHP_EOL;
