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

    }
}

