<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    protected $signature = "emails:send
                        {mailingListId? : (optional) The ID of the mailing list to get recipients from}
                        {--ignoreUnsubscribed : Whether to ignore the recipient's unsubscribed status}";

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    // load dependencies here
    public function handle()
    {
        // do the work
    }
}
