<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Lista todas as tarefas criadas
     */
    public function index()
    {
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        return view('task.index', compact('tasks'));
    }

    /**
     * Mostra tela para criação de uma tarefa
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Grava no bd a nova tarefa
     */
    public function store(Request $request)
    {
        $task = new Task();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
        $task->saveTask($data);
        return redirect('/home')->with('success', 'New task has been created!');
    }

    /**
     * Mostra os detalhes de uma tarefa
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra a tela de edição de tarefa
     */
    public function edit($id)
    {
        $task = Task::where('user_id', auth()->user()->id)
            ->where('id', $id)
            ->first();
        return view('task.edit', compact('task', 'id'));
    }

    /**
     * Salva no bd uma edição de tarefa
     */
    public function update(Request $request)
    {
        $task = new Task();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required',
            'id'=> 'required',
        ]);
        $task->updateTask($data);
        return redirect('/home')->with('success', 'The user task has been updated!!');
    }

    /**
     * Deleta do bd uma tarefa
     */
    public function delete(Request $request)
    {
        $task = Task::find($request->get('id'));
        $task->delete();
        return redirect('/home')->with('success', 'Task has been deleted!!');
    }
}
