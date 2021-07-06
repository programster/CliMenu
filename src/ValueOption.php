<?php

/*
 * A value option to plug into a Value menu
 */

namespace Programster\CliMenu;


final class ValueOption
{
    private $m_name;
    private $m_value;


    public function __construct(string $name, $value)
    {
        $this->m_name = $name;
        $this->m_value = $value;
    }


    # Accessors
    public function getName() : string { return $this->m_name; }
    public function getValue() { return $this->m_value; }
}
