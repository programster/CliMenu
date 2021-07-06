<?php

namespace Programster\CliMenu;

/*
 * An action menu is a CLI menu whereby each option has an action that is treggered when the user
 * chooses it, rather than returning a value.
 */

class ValueMenu extends MenuAbstract
{
    protected $m_options;


    public function __construct($name, ValueOption ...$valueOptions)
    {
        foreach ($valueOptions as $option)
        {
            $value = $option->getValue();

            $callback = function() use ($value) {
                return $value;
            };

            $this->m_options[] = new MenuOption($option->getName(), $callback);
        }
    }
}
