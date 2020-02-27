<?php

namespace Rakshitbharat\Cleanify;

class Cleanify
{
    public function cleanify()
    {
        $cleaning_commands = config('cleanify.cleaning_commands');
        echo 'Command Started';
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $phpPath = exec("where php");
        } else {
            $phpPath = exec("which php");
        }

        foreach ($cleaning_commands as $cleaning_commandss) {
            $command = $phpPath . ' ' . base_path() . DIRECTORY_SEPARATOR . "artisan " . $cleaning_commandss;
            echo shell_exec($command) . '\n';
        }
    }
}
