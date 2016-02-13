<?php namespace App\Console\Commands;

use BibleBowl\Season;
use Illuminate\Console\Command;
use Setting;

class ProgressBar extends Command
{

    const COMMAND = 'demo:progressBar';

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
        $this->output->progressStart(10);

        for ($i = 0; $i < 10; $i++) {
            sleep(1);

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }
}
