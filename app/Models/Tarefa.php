<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tarefa extends Model
{
    public static function getAll () {
        $sql = 'SELECT * FROM tarefas';
        return DB::select($sql);
    }

    public static function getById ($id) {
        $sql = "SELECT * FROM tarefas WHERE id = $id ";
        return DB::select($sql);
    }

    public static function add ($titulo) {
        try {
            $sql = "INSERT INTO tarefas (titulo) VALUES (:titulo)";
            DB::insert($sql, ['titulo'=>$titulo]);
            return true;

        } catch (\Exception $ex) {
            return false;
        }
    }

    public static function edit ($id, $titulo) {

        $sql = 'UPDATE tarefas SET titulo = :titulo WHERE id = :id';
        return DB::update($sql, ['id' => $id, 'titulo' => $titulo]);

    }

    public static function remove ($id) {
        $sql = 'DELETE FROM tarefas WHERE id = :id';
        return DB::delete($sql, [':id' => $id]);
    }

    public static function editResolved ($id, $resolved) {

        $sql = 'UPDATE tarefas SET resolvido = :resolvido WHERE id = :id';
        return DB::update($sql, ['id' => $id, 'resolvido' => $resolved]);
    }
}

