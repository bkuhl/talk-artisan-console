<?php namespace App\Console\Commands;

use BibleBowl\Season;
use Illuminate\Console\Command;
use Setting;

class Secret extends Command
{

    const COMMAND = 'demo:secret';

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
        $password = $this->secret('What is your password?');

        $this->info('Your password is: '.$password);
    }
}
