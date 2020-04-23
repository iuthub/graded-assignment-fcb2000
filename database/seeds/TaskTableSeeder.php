<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task=new Task([
            'title'=>'Hit the gym'
        ]);
        $task->save();

        $task=new Task([
            'title'=>'Make some food'
        ]);
        $task->save();

        $task=new Task([
            'title'=>'Finish quiz'
        ]);
        $task->save();
    }
}
