<?php namespace App\Console\Commands;

use BibleBowl\Season;
use Illuminate\Console\Command;
use Setting;

class Table extends Command
{

    const COMMAND = 'demo:table';

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
        $headers = [
            'First Name',
            'Last Name',
            'Email'
        ];
        $data = [
            [
                'Joe',
                'Smith',
                'joe.smith@themoon.com'
            ],
            [
                'Chloe',
                'Anderson',
                'chloe.anderson@themoon.com'
            ]
        ];
        $this->table($headers, $data, 'symfony-style-guide');
    }
}
