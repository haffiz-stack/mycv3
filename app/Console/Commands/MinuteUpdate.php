<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MinuteUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $details = [
            'title' => 'Mail from HaffizSamad.live',
            'body' => 'This is for testing email using mailjet'
        ];
        // echo "whatever \n";
        \Mail::to('haffiz_ito@yahoo.com')->send(new \App\Mail\testMail($details));
        // $this->info('email sent every minute');
        // return 0;
    }
}
