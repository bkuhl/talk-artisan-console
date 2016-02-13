<?php namespace App\Console\Commands;

use BibleBowl\Season;
use Illuminate\Console\Command;
use Setting;

class Autocomplete extends Command
{

    const COMMAND = 'demo:autocomplete';

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
        $language = $this->anticipate(
            'What is your favorite programming language?',
            ['PHP', 'Java', 'Ruby']
        );

        $this->info("Your favorite language is $language");
    }
}
