CLI Menu
=========

This package makes it simple to create menus in the CLI for terminal applications. There are two primary types.

* Action Menu - print out a list of options and the options fire a callback that does something. E.g. exit the program or process a file.
* Value Menu - prompt the user to make a choice from a limited set. E.g. output a list of the local files, and have the user select one by typing in the menu option index instead of a full path.


## Install

Install the package with:

```bash
composer require programster/cli-menu
```


## Example Code

### Action Menu
Here is some code demonstrating that you can build an action menu out of simple clusures, or even invokable objects:

```php
$overComplicatedPrintHelloWorldObject = new class {
    public function __invoke() {
        print PHP_EOL . "Hello world!" . PHP_EOL;
    }
};

$exitCallback = function() { die("Goodbye then!" . PHP_EOL); };
$sayHelloWorldOption = new \Programster\CliMenu\MenuOption("Print hello world", $overComplicatedPrintHelloWorldObject);
$exitOption = new \Programster\CliMenu\MenuOption("Exit", $exitCallback);
$cliMenu = new Programster\CliMenu\ActionMenu("My Action Menu", $sayHelloWorldOption, $exitOption);

while(true)
{
    $cliMenu->run();
}
```

### Value Menu

Here is a basic example where we get the user to pick the number of seconds they wish for:

```php
$possibleValues = array(
    new Programster\CliMenu\ValueOption("Seconds in a day", (60 * 60 * 24)),
    new Programster\CliMenu\ValueOption("Seconds in a week", (60 * 60 * 24 * 52)),
    new Programster\CliMenu\ValueOption("Seconds in a year", (60 * 60 * 24 * 365)),
);

$valueMenu = new Programster\CliMenu\ValueMenu("Pick your seconds amount", ...$possibleValues);

$chosenValue = $valueMenu->run();
```

