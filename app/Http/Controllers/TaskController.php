<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::query()->orderBy('title')->get();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('task.index')->with('tasks', $task)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('task.create');
    }
    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return to_route('tasks.index')->with('mensagem.sucesso', "A task '{$task->title}' foi adicionada ");
    }

    // public function show($id)
    // {
    //     return Task::findOrFail($id);
    // }

    public function edit(Task $task)
    {
        return view('task.edit')->with('task', $task);
    }

    public function update(Task $task, Request $request)
    {
        $task->fill($request->all());
        $task->save();

        $task->save();

        return to_route('tasks.index')
            ->with('mensagem.sucesso', "Tarefa '{$task->title}' atualizada com sucesso.");
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return to_route('tasks.index')
            ->with('mensagem.sucesso', "Tarefa  '{$task->title}' deletada com sucesso");
    }
}
