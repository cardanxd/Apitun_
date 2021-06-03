<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(Request $request)
    {
        $task = Task::all();
        return $task;
    }

    public function store(GuardarTaskRequest $request)
    {
        Task::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>"Guardado correctamente"
        ]);
    }
    public function show(Request $request)
    {
        $task = Task::findOrFail($request->id);
        return $task;
    }

    public function update(Request $request)
    {
        $task = Task::findOrFail($request->id);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();

        return $task;
       
    }

    public function destroy(Request $request)
    {
        $task = Task::destroy($request->id);
        return $task;
    }
}