<?php

namespace App\Console;

use App\Console\Commands\Text;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        Commands\Ask::class,
        Commands\Confirm::class,
        Commands\Secret::class,
        Commands\Table::class,
        Commands\Text::class,
        Commands\Autocomplete::class,
        Commands\Choice::class,
        Commands\ProgressBar::class,
        Commands\SendEmails::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->command('emails:send --ignoreUnsubscribed')
                  ->weekly();
    }
}
