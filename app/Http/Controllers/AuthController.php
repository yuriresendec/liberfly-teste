<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Exception;

class AuthController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/token",
     *     operationId="authenticateUser",
     *     summary="Autenticação do usuário",
     *     tags={"Autenticação"},
     *     @OA\Response(response="default", description="Token")
     * )
     */
    public function getToken()
    {
        try {
            return response()->json((new AuthService)->getToken(), 200);
        } catch (\Throwable $e) {
            return response()->json(['error' => true, 'msg' => $e->getMessage()], 401);
        }
    }
}
