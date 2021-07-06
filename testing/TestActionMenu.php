<?php

/*
 * Test that we can build an action menu that will either print out a message, or exit the application (infinite loop).
 */

require_once(__DIR__ . '/../vendor/autoload.php');

$overComplicatedPrintHelloWorldObject = new class {
    public function __invoke() {
        print PHP_EOL . "Hello world!" . PHP_EOL;
    }
};

$exitCallback = function() { die("Goodbye then!" . PHP_EOL); };
$sayHelloWorldOption = new \Programster\CliMenu\MenuOption("Print hello world", $overComplicatedPrintHelloWorldObject);
$exitOption = new \Programster\CliMenu\MenuOption("Exit", $exitCallback);
$cliMenu = new Programster\CliMenu\ActionMenu("Action Menu Number 1!", $sayHelloWorldOption, $exitOption);

while(true)
{
    $cliMenu->run();
}
