<?php

namespace App\Http\Controllers;


use App\Task;

class TasksController extends Controller
{
    public function index() {

      $tasks = Task::all();

      return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) {    // Task $task ===   //$task = Task::find($id);  it will find the task id that equal to that wild card {task}

      return view('tasks.show', compact('task'));

    }
}
