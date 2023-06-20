<?php

namespace App\Services;

use App\Models\RecordsModel;

class RecordsService
{
    public function getAllRecords(){
        $recordsModel = new RecordsModel;

        return $recordsModel->getAllRecords();
    }

    public function getRecord($id){
        if(empty($id)){
            throw new \Exception("O parâmetro 'id' não foi informado.", 1);
        }
        $recordsModel = new RecordsModel;

        $records = $recordsModel->getRecord($id);

        if(empty($records)){
            throw new \Exception("Não foi encontrado nenhum registro com esse id.", 1);
        }

        return $records;
    }
}