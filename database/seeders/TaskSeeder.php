<?php

namespace Database\Seeders;

use App\Models\task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([
            'title' => 'Miha task de exemplo',
            'description' => 'Essa é a descrição dessa task',
            'due_date' => '2022-01/-01 00:10',
            'user_id' => 1,
            'category_id' => 1
        ]);

    }
}
