<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class RecordsModel extends Model
{
    public function getAllRecords()
    {
        return DB::connection('mysql')->select('SELECT * FROM liberfly.records');
    }

    public function getRecord(Int $id)
    {
        return DB::connection('mysql')->select('SELECT * FROM liberfly.records WHERE id = ' . $id);
    }
}
