<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class dev_deploy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:deploy {--fresh} {--no-serve}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simple commands to deploy app instanly as Developer.';

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
        if (!file_exists('.env')) {
            $this->info('Please setup your .env first!');
            copy('.env.example', '.env');
            exit();
        }
        $this->info('Telepon by <bg=blue;fg=white>Albet Novendo</>, <bg=red;fg=white>Hernando</>.');
        $this->info('Building Telepon...');
        if ($this->option('fresh')) {
            Artisan::call('migrate:fresh');
        } else {
            Artisan::call('migrate');
        }
        Artisan::call('db:seed');
        $this->info('Building complete.');
        if (!$this->option('no-serve')) {
            $this->info('Press CTRL+C to escape');
            $this->info('Note: Next Time run development server by <bg=green;fg=white>php artisan serve</>');
            Artisan::call('serve');
        }
    }
}
