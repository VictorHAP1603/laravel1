<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Tarefa;

class TarefasController extends Controller
{
    public function index() {
        $list = Tarefa::getAll();

        return view('tarefas.index', [
            'list' => $list
        ]);
    }

    public function add() {
        return view('tarefas.add');

    }

    public function addAction(Request $request) {
        try {
            if ($request->filled('titulo')) {
                $titulo = $request->input('titulo');
                Tarefa::add($titulo);

                return redirect('/tarefas');
            } else {
                return redirect('/tarefas/add')
                ->with('warning', 'Coloque um título!');
            }


        }catch (\Exception $ex) {

        }


    }

    public function edit($id) {
        $task = Tarefa::getById($id);

        if (count($task) > 0) {
            return view('tarefas.edit', [
                'tarefa'=>$task[0]
            ]);
        } else {
            return redirect('/tarefas');
        }

    }

    public function editAction(Request $request, $id) {
        if ($request->filled('titulo')) {


        } else {

        }
    }

    public function delete($id) {

    }

    public function resolved($id) {

    }

}
