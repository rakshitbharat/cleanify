<?php


namespace Rakshitbharat\Cleanify;

use Illuminate\Console\Command;

class ConsoleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cleanify:cleanify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean cache with one command.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $Cleanify = (new Cleanify());
        $Cleanify->cleanify();
    }
}
