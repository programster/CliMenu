<?php

namespace Programster\CliMenu;

/*
 * A value menu is just like an action menu, just that the callbacks always return a value, rather than running
 * a callback.
 */

class ValueMenu extends ActionMenu
{
    protected $m_options;


    public function __construct($name, ValueOption ...$valueOptions)
    {
        $this->m_name = $name;
        
        if (count($valueOptions) <= 0)
        {
            throw new \Exception("Value menu needs at least one option.");
        }

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
