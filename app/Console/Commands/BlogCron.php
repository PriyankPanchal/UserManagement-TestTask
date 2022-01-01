<?php

namespace App\Console\Commands;

use App\Models\Blogs;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class BlogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:cron';

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
        $users = Blogs::whereRaw('DATEDIFF(NOW(), created_at) > 30')->delete(); 
    }
}
