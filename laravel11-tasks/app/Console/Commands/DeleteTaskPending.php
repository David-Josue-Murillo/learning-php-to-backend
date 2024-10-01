<?php

namespace App\Console\Commands;

use App\Models\Task;
use Illuminate\Console\Command;

class DeleteTaskPending extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Borra todas las tareas pendientes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Task::where('deleted_at', '!=', null)->forceDelete();
    }
}
