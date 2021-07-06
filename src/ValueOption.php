<?php

/*
 * A value option to plug into a Value menu
 */

namespace Programster\CliMenu;


final class ValueOption
{
    private string $m_name;
    private mixed $m_value;


    /**
     * Creates a new option for a ValueMenu.
     * @param string $name - the name to display as the option in the value menu.
     * @param mixed $value - whatever value you wish for the value menu to return when the user picks this option
     */
    public function __construct(string $name, mixed $value)
    {
        $this->m_name = $name;
        $this->m_value = $value;
    }


    # Accessors
    public function getName() : string { return $this->m_name; }
    public function getValue() : mixed { return $this->m_value; }
}
