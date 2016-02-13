<?php namespace App\Console\Commands;

use BibleBowl\Season;
use Illuminate\Console\Command;
use Setting;

class Text extends Command
{

    const COMMAND = 'demo:text';

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
        $this->info('This is "info" text');
        $this->comment('This is "comment" text');
        $this->question('This is "question" text');
        $this->error('This is "error" text');
    }
}
