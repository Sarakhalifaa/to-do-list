<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class Taskscontroller extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('completed_at')
        ->orderBy('id','desc')
        ->get();
        return view('Tasks.index' , ['tasks' => $tasks,]);
    }

    public function create()
    {
        return view('Tasks.create');
    }

    public function store()
    {
        Task::create([
            'description' => request('description'),
        ]);
        return redirect('/');

    }

    public function update($id)
    {
        $task = Task::where('id',$id)->first();
        $task -> completed_at = now();
        $task->save();
        return redirect('/');
    }



}
