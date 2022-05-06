<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    public function show($task) 
    {
            $task = \App\Models\Task::findOrFail( $task );
    
            return view('task',[
                'task' => $task,
            ]);
     }
    public function indexabc()
    {
        return view('abc', [
            'tasks' => \App\Models\Task::orderBy('title','asc')->get(),
        ]);
    }
    
}
