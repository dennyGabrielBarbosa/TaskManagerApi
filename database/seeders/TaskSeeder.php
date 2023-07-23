<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title' => 'Tarefa de exemplo',
            'description' => 'Esta é uma tarefa fictícia para demonstração',
            'completed' => 1
        ]);
    }
}
