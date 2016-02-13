<?php namespace App\Console\Commands;

use BibleBowl\Season;
use Illuminate\Console\Command;
use Setting;

class Confirm extends Command
{

    const COMMAND = 'demo:confirm';

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = self::COMMAND;

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($this->confirm('Are you sure you want to do that?')) {
            $this->info('Yes, lets do it');
        } else {
            $this->info("Ok, we did't do anything");
        }
    }
}
