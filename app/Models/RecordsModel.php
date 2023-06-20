<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class RecordsModel extends Model
{
    public function getAllRecords()
    {
        return DB::connection('mysql')->select('SELECT * FROM '. env('DB_SCHEMA') . '.' . env('DB_TABLE'));
    }

    public function getRecord(Int $id)
    {
        return DB::connection('mysql')->select('SELECT * FROM '. env('DB_SCHEMA') . '.' . env('DB_TABLE') . ' WHERE id = ' . $id);
    }
}
