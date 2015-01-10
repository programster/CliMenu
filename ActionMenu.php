<?php

namespace programster\climenu;

/* 
 * An action menu is a CLI menu whereby each option has an action that is treggered when the user
 * chooses it, rather than returning a value.
 */

class ActionMenu extends MenuAbstract
{    
    /**
     * Add an option to the menu
     * @param \programster\climenu\MenuOption $menuOption - the option to add
     */
    public function addOption(MenuOption $menuOption)
    {        
        $this->m_options[] = $menuOption;
    }
}

