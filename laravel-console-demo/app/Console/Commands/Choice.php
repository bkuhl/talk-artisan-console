<?php namespace App\Console\Commands;

use BibleBowl\Season;
use Illuminate\Console\Command;
use Setting;

class Choice extends Command
{

    const COMMAND = 'demo:choice';

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
        $branch = $this->choice(
            'Which branch would you like to deploy?',
            ['master', 'develop', 'staging']
        );

        $this->info('Deploying branch... '.$branch);
    }
}
