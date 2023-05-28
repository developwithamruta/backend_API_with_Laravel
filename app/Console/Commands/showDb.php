<?php

namespace App\Console\Commands;

use Illuminate\Console\Command; 
use Illuminate\Support\Facades\DB;

class showDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show current DB description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->info(DB::connection()->getDatabaseName());
        /*return Command::SUCCESS;*/
    }
}
