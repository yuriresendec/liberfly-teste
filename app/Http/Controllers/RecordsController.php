<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RecordsService;

/** 
* @OA\SecurityScheme( 
* securityScheme="bearerToken", 
* description="Token de acesso.",
* type="http", 
* name="Authorization", 
* in="header",
* scheme="bearer",
* bearerFormat="JWT"
* ) 
*/

class RecordsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/records/all",
     *     description="Lista as informações de todos os registros.",
     *     tags={"Registro"},
     *     security={
     *         {"bearerToken": {}}
     *      },
     *     @OA\Response(response="200", description="Sucesso"),
     *     @OA\Response(response="403", description="Não Autorizado"),
     *     @OA\Response(response="500", description="Erro Interno"),
     * )
     */
    public function getAllRecords()
    {
        try {
            return response()->json((new RecordsService)->getAllRecords(), 200);
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'msg' => 'Não foi possível obter os registros.'], 500);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/records",
     *     description="Lista as informações do registro com o id especificado.",
     *     tags={"Registro"},
     *      security={
     *         {"bearerToken": {}}
     *      },
     *    @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                 required={"id"},
     *                 @OA\Property(
     *                     property="id",
     *                     type="integer",
     *                 ),
     *              )
     *          )
     *      ),
     *     @OA\Response(response="200", description="Sucesso"),
     *     @OA\Response(response="403", description="Não Autorizado"),
     *     @OA\Response(response="500", description="Erro Interno"),
     * )
     */
    public function getRecord(Request $request)
    {
        try {
            $id = $request->get('id');
            return response()->json((new RecordsService)->getRecord($id), 200);
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'msg' => $e->getMessage()], 500);
        }
    }
}
