<?php

namespace Rakshitbharat\Cleanify;

class Cleanify
{
    public function cleanify()
    {
        $cleaning_commands = config('cleanify.cleaning_commands');
        foreach ($cleaning_commands as $cleaning_commandss) {
            echo shell_exec($cleaning_commandss);
        }
    }
}
