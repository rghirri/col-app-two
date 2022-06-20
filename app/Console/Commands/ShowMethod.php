<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\CollectionController;

class ShowMethod extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:method';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will show you the index method of the CollectionController';

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
        $collectionController = new CollectionController();
        print_r($collectionController->index());
    }
}